<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Prequestion;
use App\model\PrequestionUser;
use Illuminate\Support\Facades\Auth;

class PrequestionController extends Controller
{
    //MAIN PREQUESTION
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
            $escape = htmlspecialchars($req->desc);
            $prequestion->desc = nl2br($escape);
        }
        $prequestion->save();
        return redirect('/projects/detail/'.$prequestion->project->code)->with(['msg' => 'Preliminary Question Added!','color' => 'success']);
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
            $escape = htmlspecialchars($req->desc);
            $prequestion->desc = nl2br($escape);
        }
        $prequestion->save();
        return redirect('/projects/detail/'.$prequestion->project->code)->with(['msg' => 'Preliminary Question Updated!','color' => 'success']);
    }
    public function deletePrequestion(Request $req)
    {
      $id = decrypt($req->token);
      $prequestion = Prequestion::find($id);
      $project = $prequestion->project->code;
      $prequestion->delete();
      return redirect('/projects/detail/'.$project)->with(['msg' => 'Preliminary Question Deleted!','color' => 'success']);
    }

    //ANSWERS
    public function v_addAnswer($prequestion_id)
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($prequestion_id);
        $data = Prequestion::find($did);
        $cek = $data->prequestionUser()->where('user_id','=',Auth::id())->count();
        if($cek > 0){
            $answer = $data->prequestionUser()->where('user_id','=',Auth::id())->first();
            return view("_student.prequestion.edit",["data" => $answer , "answer_id" => encrypt($answer->id)]);
        }else{
            return view("_student.prequestion.add",["data" => $data , "prequestion_id" => $prequestion_id]);
        }
    }

    public function insertPrequestionUser(Request $req)
    {
        $req->validate([
            'answer' => 'required|max:191',
        ]);
        $prequestionU = new PrequestionUser();
        $prequestionU->answer = $req->answer;
        $prequestionU->prequestion_id = decrypt($req->token);
        $prequestionU->user_id = Auth::id();
        $prequestionU->save();
        $code = $prequestionU->prequestion->project->code;
        return redirect('projects/detail/'.$code)->with(['msg' => 'Preliminary Answer Added!','color' => 'success']);
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
        $code = $prequestionU->prequestion->project->code;
        return redirect('projects/detail/'.$code)->with(['msg' => 'Preliminary Answer Updated!','color' => 'success']);
    }
}
