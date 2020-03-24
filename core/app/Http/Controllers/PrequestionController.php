<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Prequestion;
use App\model\PrequestionUser;

class PrequestionController extends Controller
{
    public function insertPrequestion(Request $req)
    {
        $prequestion = new Prequestion();
        $prequestion->question = $req->question;
        $prequestion->project_id = decrypt($req->token);
        if ($req->has('desc')) {
            $prequestion->desc = $req->desc;
        }
        $prequestion->save();
        return redirect('/projects/detail/'.$req->token)->with(['msg' => 'Preliminary Question Added!','color' => 'success']);
    }
    public function updatePrequestion(Request $req)
    {
        $id = decrypt($req->token);
        $prequestion = Prequestion::find($id);
        $prequestion->question = $req->question;
        if ($req->has('desc')) {
            $prequestion->desc = $req->desc;
        }
        $prequestion->save();
        return redirect('/projects/detail/'.encrypt($prequestion->project_id))->with(['msg' => 'Preliminary Question Updated!','color' => 'success']);
    }
    public function deletePrequestion(Request $req)
    {
      $id = decrypt($req->token);
      $prequestion = Prequestion::find($id);
      $project_id = $prequestion->project_id;
      $prequestion->delete();
      return redirect('/projects/detail/'.encrypt($project_id))->with(['msg' => 'Preliminary Question Deleted!','color' => 'success']);
    }
    public function insertPrequestionUser(Request $req)
    {
        $prequestionU = new PrequestionUser();
        $prequestionU->answer = $req->answer;
        $prequestionU->prequestion_id = $req->prequestion_id;
        $prequestionU->user_id = $req->user_id;
        $prequestionU->save();
        return redirect('/prequestions/')->with(['msg' => 'Preliminary Answer Added!','color' => 'success']);
    }
    public function updatePrequestionUser(Request $req)
    {
        $id = decrypt($req->token);
        $prequestionU = PrequestionUser::find($id);
        $prequestionU->answer = $req->answer;
        $prequestionU->save();
        return redirect('/prequestions/')->with(['msg' => 'Preliminary Answer Updated!','color' => 'success']);
    }
    public function deletePrequestionUser(Request $req)
    {
      $id = decrypt($req->token);
      $prequestionU = PrequestionUser::find($id);
      $prequestionU->delete();
      return redirect('/prequestions/')->with(['msg' => 'Preliminary Answer Deleted!','color' => 'success']);
    }
}
