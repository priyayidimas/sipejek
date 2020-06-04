<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Quiz;
use App\model\QuizChoice;
use App\model\QuizUser;
use App\model\Phase;
use App\model\Activity;
use App\Notifications\ProjectNotification;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    
    public function newQuiz(Request $req)
    {
        $req->validate([
            'title' => 'required|max:50',
            'maxgrade' => 'nullable|integer',
            'essay' => 'required|max:50'
        ]);
        $phase = Phase::find(decrypt($req->token));
        $project = $phase->project;

        $rand = rand(0,1000);
        $slug = Controller::slugger($req->title,'-');
        
        $activity = new Activity();
        $activity->title = $req->title;
        $activity->slug = $slug.'-'.$rand;
        $activity->type = 'quiz';
        $activity->phase_id = decrypt($req->token);

        if ($req->has('maxgrade')) {
            $activity->maxgrade = $req->maxgrade;
        }
        $activity->save();
        foreach ($req->essay as $essay) {
            $question = new Quiz();
            $question->question = $essay;
            $question->activity_id = $activity->id;
            $question->save();
        }

        $projectUser = $project->projectuser;
        foreach($projectUser as $prou){
            $user = $prou->user;
            $details = [
                'code' => $project->code,
                'header' => "New ".$activity->type,
                'body' => "Hi, ".$user->fullname."! Your Teacher Has Posted New Quiz In ".$project->code." - ".$project->title,
                'link' => url('/activity/detail/'.$activity->slug),
            ];
            if($user->type == 1){
                $user->notify(new ProjectNotification($details));
            }
        }
        return redirect('/projects/detail/'.$project->code)->with(['msg' => 'New Quiz Added!','color' => 'success']);
    }

    public function v_addQuestion($activity_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view("_teacher.activity.question.add",["eid" => $activity_id]);
    }
    public function v_editQuestion($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Quiz::find($did);
        return view("_teacher.activity.question.edit",["data" => $data, "eid" => $id]);
    }
    public function v_deleteQuestion($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Quiz::find($did);
        return view("_teacher.activity.question.delete",["data" => $data, "eid" => $id]);
    }

    public function insertQuestion(Request $req)
    {
        $req->validate([
            'question' => 'required|max:50',
        ]);

        $quiz = new Quiz();
        $quiz->question = $req->question;
        $quiz->activity_id = decrypt($req->token);
        if ($req->has('desc')) {
            $quiz->desc = nl2br($req->desc);
        }
        $quiz->save();
        return redirect('/activity/detail/'.$quiz->activity->slug)->with(['msg' => 'Quiz Question Added!','color' => 'success']);
    }
    public function updateQuestion(Request $req)
    {
        $req->validate([
            'question' => 'required|max:50',
        ]);

        $id = decrypt($req->token);
        $quiz = Quiz::find($id);
        $quiz->question = $req->question;
        $quiz->isMultiple = ($req->has('isMultiple')) ? 1 : 0;
        if ($req->has('desc')) {
            $quiz->desc = nl2br($req->desc);
        }
        $quiz->save();
        return redirect('/activity/detail/'.$quiz->activity->slug)->with(['msg' => 'Quiz Question Updated!','color' => 'success']);

    }
    public function deleteQuestion(Request $req)
    {
      $id = decrypt($req->token);
      $quiz = Quiz::find($id);
      $slug = $quiz->activity->slug;

      $quiz->delete();
      return redirect('/activity/detail/'.$slug)->with(['msg' => 'Quiz Question Deleted!','color' => 'success']);
    }
    public function insertQuizChoice(Request $req)
    {
        $req->validate([
            'choice' => 'required|max:191',
            'isTrue' => 'required|integer',
            'question_id' => 'required|exists:pro_act_quiz_question,id',
        ]);
        $choice = new QuizChoice();
        $choice->choice = $req->choice;
        $choice->question_id = $req->question_id;
        $choice->isTrue = ($req->has('isTrue')) ? 1 : 0;
        $choice->save();
        return redirect('/quizes/')->with(['msg' => 'Quiz Choice Added!','color' => 'success']);
    }
    public function updateQuizChoice(Request $req)
    {
        $req->validate([
            'choice' => 'required|max:191',
            'isTrue' => 'required|integer',
        ]);
        $id = decrypt($req->token);
        $choice = QuizChoice::find($id);
        $choice->choice = $req->choice;
        $choice->isTrue = ($req->has('isTrue')) ? 1 : 0;
        $choice->save();
        return redirect('/quizes/')->with(['msg' => 'Quiz Choice Updated!','color' => 'success']);
    }
    public function deleteQuizChoice(Request $req)
    {
      $id = decrypt($req->token);
      $choice = QuizChoice::find($id);
      $choice->delete();
      return redirect('/quizes/')->with(['msg' => 'Quiz Choice Deleted!','color' => 'success']);
    }
    public function insertQuizUser(Request $req)
    {
        $req->validate([
            'answer' => 'required|max:191',
            'question_id' => 'required|exists:pro_act_quiz_question,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $quizU = new QuizUser();
        $quizU->answer = $req->answer;
        $quizU->question_id = $req->question_id;
        $quizU->user_id = $req->user_id;
        $quizU->save();
        return redirect('/quizes/')->with(['msg' => 'Quiz Answer Added!','color' => 'success']);
    }
    public function updateQuizUser(Request $req)
    {
        $req->validate([
            'answer' => 'required|max:191',
        ]);

        $id = decrypt($req->token);
        $quizU = QuizUser::find($id);
        $quizU->answer = $req->answer;
        $quizU->save();
        return redirect('/quizes/')->with(['msg' => 'Quiz Answer Updated!','color' => 'success']);
    }
    public function deleteQuizUser(Request $req)
    {
      $id = decrypt($req->token);
      $quizU = QuizChoice::find($id);
      $quizU->delete();
      return redirect('/quizes/')->with(['msg' => 'Quiz Answer Deleted!','color' => 'success']);
    }
}
