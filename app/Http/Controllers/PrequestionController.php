<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Prequestion;
use App\model\PrequestionUser;
use Illuminate\Support\Facades\Auth;

class PrequestionController extends Controller
{
    //GET
    public function add($project_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view("_teacher.prequestion.add",["project_id" => $project_id]);
    }
    public function edit($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Prequestion::find($did);
        return view("_teacher.prequestion.edit",["data" => $data, "eid" => $id]);
    }
    public function delete($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Prequestion::find($did);
        return view("_teacher.prequestion.delete",["data" => $data, "eid" => $id]);
    }
    public function detail($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Prequestion::find($did);
        return view("_teacher.prequestion.detail",["data" => $data, "eid" => $id]);
    }
    public function closeforum($project_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view("_teacher.prequestion.closeforum",["project_id" => $project_id]);
    }
    
    //POST
    public function insertPrequestion(Request $req)
    {
        $req->validate([
            'question' => 'required|max:191',
            'desc' => 'nullable|max:191',
        ]);
        $prequestion = new Prequestion();
        $prequestion->question = $req->question;
        $prequestion->project_id = decrypt($req->token);
        if ($req->has('desc')) {
            $prequestion->desc = nl2br($req->desc);
        }
        $prequestion->save();
        return redirect('/projects/detail/'.$req->token)->with(['msg' => 'Preliminary Question Added!','color' => 'success']);
    }
    public function updatePrequestion(Request $req)
    {
        $req->validate([
            'question' => 'required|max:191',
            'desc' => 'nullable|max:191',
        ]);
        $id = decrypt($req->token);
        $prequestion = Prequestion::find($id);
        $prequestion->question = $req->question;
        if ($req->has('desc')) {
            $prequestion->desc = nl2br($req->desc);
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
        $req->validate([
            'answer' => 'required|max:191',
            'prequestion_id' => 'required|exists:pro_prequestion,id',
            'user_id' => 'required|exists:users,id',
        ]);
        $prequestionU = new PrequestionUser();
        $prequestionU->answer = $req->answer;
        $prequestionU->prequestion_id = $req->prequestion_id;
        $prequestionU->user_id = $req->user_id;
        $prequestionU->save();
        return redirect('/prequestions/')->with(['msg' => 'Preliminary Answer Added!','color' => 'success']);
    }
    public function updatePrequestionUser(Request $req)
    {
        $req->validate([
            'answer' => 'required|max:191',
        ]);
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
