<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Project;
use App\model\Phase;
use App\model\ProjectUser;
use App\model\User;

class ProjectController extends Controller
{
    public function insertProject(Request $req)
    {
        $cek = Project::where('code','=',$req->code)->count();
        echo $cek;
        if($cek == 0){
            $project = new Project();
            $project->code = $req->code;
            $project->topic = $req->topic;
            $project->title = $req->title;
            if ($req->has('desc')) {
                $project->desc = $req->desc;
            }
            $project->save();
            // echo "Here";
            return redirect('/projects/')->with(['msg' => 'Project Added!','color' => 'success']);
        }else{
            // echo "Nowhere";
            return redirect('/projects/')->with(['msg' => 'Duplicate Project','color' => 'danger']);
        }
    }
    public function updateProject(Request $req)
    {
        $id = decrypt($req->token);
        $project = Project::find($id);
        $project->code = $req->code;
        $project->topic = $req->topic;
        $project->title = $req->title;
        if ($req->has('desc')) {
        $project->desc = $req->desc;
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
    public function insertPhase(Request $req)
    {
        $phase = new Phase();
        $phase->title = $req->title;
        $phase->date_start = $req->date_start;
        $phase->date_due = $req->date_due;
        $phase->project_id = $req->project_id;
        if ($req->has('desc')) {
            $phase->desc = $req->desc;
        }
        $phase->save();
        return redirect('/phases/')->with(['msg' => 'Phase Added!','color' => 'success']);
    }
    public function updatePhase(Request $req)
    {
        $id = decrypt($req->token);
        $phase = Phase::find($id);
        $phase->title = $req->title;
        $phase->date_start = $req->date_start;
        $phase->date_due = $req->date_due;
        if ($req->has('desc')) {
            $phase->desc = $req->desc;
        }
        $phase->save();
        return redirect('/phases/')->with(['msg' => 'Phase Updated!','color' => 'success']);
    }
    public function deletePhase(Request $req)
    {
      $id = decrypt($req->token);
      $phase = Phase::find($id);
      $phase->delete();
      return redirect('/phases/')->with(['msg' => 'Phase Deleted!','color' => 'success']);
    }
    public function randomString($length = 6)
    {
        $char = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz";
        $rand = "";
        for($i = 0; $i < $length; $i++){
            $rand = $rand.$char[rand(0, strlen($char)-1)];
        }
        return $rand;
    }
    public function insertProjectUser(Request $req)
    {
        $groups = $req->groups;
        for($i = 0; $i < $groups; $i++){
            $var = $this->randomString();

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
        return redirect('/projects/detail/'.$req->token)->with(['msg' => 'Project and User Linked!','color' => 'success']);
    }
    public function deleteProjectUser(Request $req)
    {
      $id = decrypt($req->token);
      $proUser = ProjectUser::find($id);
      $project_id = $proUser->project_id;
      $proUser->delete();
      return redirect('/projects/detail/'.encrypt($project_id))->with(['msg' => 'Project and User Link Deleted!','color' => 'success']);
    }

    public function closeForum(Request $req)
    {
        $id = decrypt($req->token);
        $project = Project::find($id);
        $project->hasPreOk = 1;
        if($req->has('desc')){
            $project->desc = $req->desc;
        }
        $project->save();
        return redirect('/projects/detail/'.$req->token)->with(['msg' => 'Project and User Link Deleted!','color' => 'success']);
    }
}
