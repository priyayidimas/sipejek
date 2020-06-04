<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\model\Project;
use App\model\Phase;
use App\model\ProjectUser;
use App\model\User;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    //GET
    public function index() {
        if (!Auth::check()) {
            return redirect('/');
        }
        $data = Project::get();
        return view("_teacher.project.view",["data" => $data]);
    }
    public function editbyid($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Project::find($did);
        return view("_teacher.project.edit",["data" => $data, "eid" => $id]);
    }
    public function deletebyid($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Project::find($did);
        return view("_teacher.project.delete",["data" => $data, "eid" => $id]);
    }
    public function detail($code) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $data = Project::where("code",$code)->first();
        $id = $data->id;
        return view("_teacher.project.detail",["data" => $data, "eid" => $id]);
    }

    public function addprojectbyid($project_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view("_teacher.project.user_add",["project_id" => $project_id]);
    }
    public function deleteprojectbyid($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = ProjectUser::find($did);
        return view("_teacher.project.user_delete",["data" => $data, "eid" => $id]);
    }

    public function addphasebyid($project_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view("_teacher.phase.add",["project_id" => $project_id]);
    }
    public function editphasebyid($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Phase::find($did);
        return view("_teacher.phase.edit",["data" => $data, "eid" => $id]);
    }
    public function deletephasebyid($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Phase::find($did);
        return view("_teacher.phase.delete",["data" => $data, "eid" => $id]);
    }
    public function detailphase($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Phase::find($did);
        return view("_teacher.phase.detail",["data" => $data, "eid" => $id]);
    }

    //Project
    public function insertProject(Request $req)
    {
        $req->validate([
            'code' => 'required|max:8',
            'topic' => 'required|max:20',
            'title' => 'required|max:50',
            'desc' => 'nullable',
        ]);

        $normalize = Controller::slugger($req->code,"");

        $cek = Project::where('code','=',$normalize)->count();
        echo $cek;
        if($cek == 0){

            $project = new Project();
            $project->code = $normalize;
            $project->topic = $req->topic;
            $project->title = $req->title;
            if ($req->has('desc')) {
                $project->desc = nl2br($req->desc);
            }
            $project->save();
            Storage::disk('project')->makeDirectory($project->code.'/assignment');
            Storage::disk('project')->makeDirectory($project->code.'/material');
            return redirect('/projects/')->with(['msg' => 'Project Added!','color' => 'success']);
        }else{
            return redirect('/projects/')->with(['msg' => 'Duplicate Project','color' => 'error']);
        }
    }
    public function updateProject(Request $req)
    {
        $req->validate([
            'topic' => 'required|max:20',
            'title' => 'required|max:50',
            'desc' => 'nullable',
        ]);

        $id = decrypt($req->token);
        $project = Project::find($id);
        $project->code = $req->code;
        $project->topic = $req->topic;
        $project->title = $req->title;
        if ($req->has('desc')) {
            $project->desc = nl2br($req->desc);
        }
        $project->save();
        return redirect('/projects/')->with(['msg' => 'Project Updated!','color' => 'success']);
    }
    public function deleteProject(Request $req)
    {
      $id = decrypt($req->token);
      $project = Project::find($id);
      $project->delete();
      return redirect('/projects/')->with(['msg' => 'Project Deleted!','color' => 'success']);
    }
    //Phase
    public function insertPhase(Request $req)
    {
        $req->validate([
            'title' => 'required|max:50',
            'date_start' => 'required|date_format:Y-m-d',
            'time_start' => 'required|date_format:H:i',
            'date_due' => 'required|date_format:Y-m-d|after_or_equal:date_start',
            'time_due' => 'required|date_format:H:i',
            'desc' => 'nullable',
        ]);

        $phase = new Phase();
        $phase->title = $req->title;
        $phase->date_start = $req->date_start.' '.$req->time_start.':00';
        $phase->date_due = $req->date_due.' '.$req->time_due.':00';
        $phase->project_id = decrypt($req->token);
        if ($req->has('desc')) {
            $phase->desc = nl2br($req->desc);
        }
        $phase->save();
        return redirect('/projects/detail/'.$phase->project->code)->with(['msg' => 'Project Phase Added!','color' => 'success']);
    }
    public function updatePhase(Request $req)
    {
        $req->validate([
            'title' => 'required|max:50',
            'date_start' => 'required|date_format:Y-m-d',
            'time_start' => 'required|date_format:H:i',
            'date_due' => 'required|date_format:Y-m-d|after_or_equal:date_start',
            'time_due' => 'required|date_format:H:i',
            'desc' => 'nullable',
        ]);

        $id = decrypt($req->token);
        $phase = Phase::find($id);
        $phase->title = $req->title;
        $phase->date_start = $req->date_start.' '.$req->time_start.':00';
        $phase->date_due = $req->date_due.' '.$req->time_due.':00';
        if ($req->has('desc')) {
            $phase->desc = nl2br($req->desc);
        }
        $phase->save();
        return redirect('/projects/detail/'.$phase->project->code)->with(['msg' => 'Project Phase Updated!','color' => 'success']);
    }
    public function deletePhase(Request $req)
    {
      $id = decrypt($req->token);
      $phase = Phase::find($id);
      $phase->delete();
      return redirect('/projects/detail/'.$phase->project->code)->with(['msg' => 'Project Phase Deleted!','color' => 'success']);
    }
    //ProjectUSer
    public function insertProjectUser(Request $req)
    {
        $req->validate([
            'groups' => 'required|integer|min:1',
        ]);
        $groups = $req->groups;
        for($i = 0; $i < $groups; $i++){
            $var = Controller::randomString();

            $user = new User();
            $user->fullname = $var;
            $user->email = $var."@sipejek.com";
            $user->password = bcrypt($var);

            $user->save();

            $proUser = new ProjectUser();
            $proUser->user_id = $user->id;
            $proUser->project_id = decrypt($req->token);
            $proUser->save();
        }
        $code = Project::find(decrypt($req->token))->code;
        return redirect('/projects/detail/'.$code)->with(['msg' => 'Project and User Linked!','color' => 'success']);
    }
    public function deleteProjectUser(Request $req)
    {
      $id = decrypt($req->token);
      $proUser = ProjectUser::find($id);
      $project_id = $proUser->project_id;
      $proUser->delete();
      $code = Project::find($project_id)->code;
      return redirect('/projects/detail/'.$code)->with(['msg' => 'Project and User Link Deleted!','color' => 'success']);
    }

    public function closeForum(Request $req)
    {
        $id = decrypt($req->token);
        $project = Project::find($id);
        $project->hasPreOk = 1;
        if($req->has('desc')){
            $project->desc = nl2br($req->desc);
        }
        $project->save();

        return redirect('/projects/detail/'.$project->code)->with(['msg' => 'Project and User Link Deleted!','color' => 'success']);
    }

}
