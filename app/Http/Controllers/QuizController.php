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
use App\model\User;

class QuizController extends Controller
{
    //QUIZ
    public function newQuiz(Request $req)
    {
        $req->validate([
            'title' => 'required|max:50',
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

        $activity->save();
        for ($i=0; $i < count($req->essay); $i++) { 
            $question = new Quiz();
            $question->question = $req->essay[$i];
            $question->maxscore = $req->maxscore[$i];
            $question->activity_id = $activity->id;
            $question->save();
        }
        $activity->maxscore = $activity->questions()->sum('maxscore');
        $activity->save();

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
    public function v_confirmQuiz($activity_id)
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view("_teacher.activity.question.confirm",["eid" => $activity_id]);
    }

    public function confirmQuiz(Request $req)
    {
        $did = decrypt($req->token);
        $activity = Activity::find($did);
        $activity->questions()->update(['isConfirmed' => 1]);
        return redirect('/activity/detail/'.$activity->slug)->with(['msg' => 'Quiz Confirmed and Published!','color' => 'success']);
    }

    //QUESTIONS
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
        $quiz->maxscore = $req->maxscore;
        $quiz->activity_id = decrypt($req->token);
        if ($req->has('desc')) {
            $escape = htmlspecialchars($req->desc);
            $quiz->desc = nl2br($escape);
        }
        $quiz->save();

        $sum = $quiz->activity->questions()->sum('maxscore');

        $activity = Activity::find($quiz->activity->id);
        $activity->maxscore= $sum;
        $activity->save();
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
        $quiz->maxscore = $req->maxscore;
        $quiz->isMultiple = ($req->has('isMultiple')) ? 1 : 0;
        if ($req->has('desc')) {
            $escape = htmlspecialchars($req->desc);
            $quiz->desc = nl2br($escape);
        }
        $quiz->save();

        $sum = $quiz->activity->questions()->sum('maxscore');

        $activity = Activity::find($quiz->activity->id);
        $activity->maxscore= $sum;
        $activity->save();
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

    //Answers
    public function insertAnswer(Request $req)
    {
        $req->validate([
            'answer' => 'required|max:191',
        ]);

        $activity = Activity::find(decrypt($req->session));
        $project = $activity->phase->project;

        for ($i=0; $i < count($req->answer); $i++) { 
            $quizU = new QuizUser();
            $quizU->answer = $req->answer[$i];
            $quizU->question_id = decrypt($req->token[$i]);
            $quizU->user_id = Auth::id();
            $quizU->save();
        }

        if($quizU->created_at > $activity->phase->date_due){
            $sender = $quizU->user;
            $projectUser = $project->projectuser;
            foreach($projectUser as $prou){
                $user = $prou->user;
                if($user->type > 1){
                    $details = [
                        'code' => $project->code,
                        'header' => "Late Quiz Submission",
                        'body' => $sender->fullname.' Has Turned In The Quiz Late',
                        'link' => url('/activity/detail/'.$activity->slug)
                    ];
                    $user->notify(new ProjectNotification($details));
                }
            }
        }

        return redirect('/projects/detail/'.$project->code)->with(['msg' => 'Quiz Submitted!','color' => 'success']);
    }

    //Review
    public function v_reviewSubmission($activityid, $userid) {
        if (!Auth::check() || Auth::user()->type == 1) {
            return redirect('/');
        }
        $data = Activity::find($activityid);
        return view("_teacher.activity.review.quiz",["data" => $data, "eid" => $activityid, "user_id" => $userid]);
    }

    public function reviewSubmission(Request $req)
    {

        $activity = Activity::find(decrypt($req->session));
        $project = $activity->phase->project;

        for ($i=0; $i < count($req->score); $i++) { 
            $quizU = QuizUser::find(decrypt($req->token[$i]));
            $quizU->score = $req->score[$i];
            $quizU->save();
        }

        $user = $quizU->user;
        $details = [
            'code' => $project->code,
            'header' => "Late Quiz Submission",
            'body' => 'Hi, '.$user->fullname.'! Your Quiz Has Been Graded',
            'link' => url('/activity/detail/'.$activity->slug.'/submission')
        ];
        $user->notify(new ProjectNotification($details));

        return redirect('/activity/detail/'.$activity->slug)->with(['msg' => 'Quiz Graded!','color' => 'success']);
    }

    //CHOICES (TBD)
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

    //DEPRECATED ||  N/A
    public function updateAnswer(Request $req)
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
