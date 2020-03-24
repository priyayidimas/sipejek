<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Quiz;
use App\model\QuizChoice;
use App\model\QuizUser;

class QuizController extends Controller
{
    public function insertQuiz(Request $req)
    {
        $quiz = new Quiz();
        $quiz->question = $req->question;
        $quiz->activity_id = $req->activity_id;
        $quiz->isMultiple = ($req->has('isMultiple')) ? 1 : 0;
        if ($req->has('desc')) {
            $quiz->desc = $req->desc;
        }
        $quiz->save();
        return redirect('/quizes/')->with(['msg' => 'Quiz Question Added!','color' => 'success']);
    }
    public function updateQuiz(Request $req)
    {
        $id = decrypt($req->token);
        $quiz = Quiz::find($id);
        $quiz->question = $req->question;
        $quiz->isMultiple = ($req->has('isMultiple')) ? 1 : 0;
        if ($req->has('desc')) {
            $quiz->desc = $req->desc;
        }
        $quiz->save();
        return redirect('/quizes/')->with(['msg' => 'Quiz Question Updated!','color' => 'success']);
    }
    public function deleteQuiz(Request $req)
    {
      $id = decrypt($req->token);
      $quiz = Quiz::find($id);
      $quiz->delete();
      return redirect('/quizes/')->with(['msg' => 'Quiz Question Deleted!','color' => 'success']);
    }
    public function insertQuizChoice(Request $req)
    {
        $choice = new QuizChoice();
        $choice->choice = $req->choice;
        $choice->question_id = $req->question_id;
        $choice->isTrue = ($req->has('isTrue')) ? 1 : 0;
        $choice->save();
        return redirect('/quizes/')->with(['msg' => 'Quiz Choice Added!','color' => 'success']);
    }
    public function updateQuizChoice(Request $req)
    {
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
        $quizU = new QuizUser();
        $quizU->answer = $req->answer;
        $quizU->question_id = $req->question_id;
        $quizU->user_id = $req->user_id;
        $quizU->save();
        return redirect('/quizes/')->with(['msg' => 'Quiz Answer Added!','color' => 'success']);
    }
    public function updateQuizUser(Request $req)
    {
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
