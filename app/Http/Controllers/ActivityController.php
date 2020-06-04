<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Activity;
use App\model\Comment;
use App\model\Assignment;
use App\Notifications\ProjectNotification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\model\Phase;
use Illuminate\Support\Facades\File;

class ActivityController extends Controller
{
    //Main Activity
    //GET
    public function v_addMaterial($phase_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view("_teacher.activity.add_material",["phase_id" => $phase_id]);
    }
    public function v_addAssignment($phase_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view("_teacher.activity.add_assignment",["phase_id" => $phase_id]);
    }
    public function v_addQuiz($phase_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        return view("_teacher.activity.add_quiz",["phase_id" => $phase_id]);
    }
    public function v_editActivity($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Activity::find($did);
        return view("_teacher.activity.edit",["data" => $data, "eid" => $id]);
    }
    public function v_deleteActivity($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Activity::find($did);
        return view("_teacher.activity.delete",["data" => $data, "eid" => $id]);
    }
    public function detailActivity($slug) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $data = Activity::where('slug','=',$slug)->first();
        if($data->type != 'quiz'){
            return view("_teacher.activity.detail",["data" => $data, "auth" => Auth::user()]);
        }else{
            return view("_teacher.activity.detail_quiz",["data" => $data, "auth" => Auth::user()]);
        }
    }

    public function insertActivity(Request $req)
    {
        $req->validate([
            'title' => 'required|max:50',
            'type' => 'required|max:10',
            'attachment' => 'nullable',
            'maxgrade' => 'nullable|integer',
            'desc' => 'nullable|max:191',
        ]);
        $phase = Phase::find(decrypt($req->token));
        $project = $phase->project;

        $rand = rand(0,1000);
        $slug = Controller::slugger($req->title,'-');

        $activity = new Activity();
        $activity->title = $req->title;
        $activity->slug = $slug.'-'.$rand;
        $activity->type = $req->type;
        $activity->phase_id = decrypt($req->token);
        if ($req->has('attachment')) {
            $path = $project->code.'/'.$activity->type;
            $code = rand(0,1000);
    
            if($activity->type == "material"){
                $file = $req->file('attachment')->storeAs(
                    $path,
                    $code.'_'.$req->file('attachment')->getClientOriginalName(),
                    'project'
                );
            }elseif ($activity->type == "assignment") {
                Storage::disk('project')->makeDirectory($path.'/'.$activity->slug);
                $file = $req->file('attachment')->storeAs(
                    $path.$activity->slug,
                    $code.'_'.$req->file('attachment')->getClientOriginalName(),
                    'project'
                );
            }
            $activity->attachment = str_replace(env('APP_URL'),'',Storage::disk('project')->url($file));
            // File::delete(public_path($activity->attachment));
        }
        if ($req->has('maxgrade')) {
            $activity->maxgrade = $req->maxgrade;
        }
        if ($req->has('timer')) {
            $activity->timer = $req->timer;
        }
        if ($req->has('desc')) {
            $activity->desc = nl2br($req->desc);
        }
        $activity->save();

        $projectUser = $project->projectuser;
        foreach($projectUser as $prou){
            $user = $prou->user;
            $details = [
                'code' => $project->code,
                'header' => "New ".$activity->type,
                'body' => "Hi, ".$user->fullname."! Your Teacher Has Posted New ".$activity->type." In ".$project->code." - ".$project->title,
                'link' => url('/activity/detail/'.$activity->slug),
            ];
            if($user->type == 1){
                $user->notify(new ProjectNotification($details));
            }
        }
        return redirect('/projects/detail/'.$project->code)->with(['msg' => 'New Activity Added!','color' => 'success']);
    }
    public function updateActivity(Request $req)
    {
        $req->validate([
            'title' => 'required|max:50',
            'attachment' => 'nullable',
            'timer' => 'nullable|integer',
            'maxgrade' => 'nullable|integer',
            'desc' => 'nullable|max:191',
        ]);

        $id = decrypt($req->token);

        $activity = Activity::find($id);
        $phase = $activity->phase;
        $project = $phase->project;

        $activity->title = $req->title;
        if ($req->has('attachment')) {
            $path = $project->code.'/'.$activity->type;
            $code = rand(0,1000);
    
            if($activity->type == "material"){
                $file = $req->file('attachment')->storeAs(
                    $path,
                    $code.'_'.$req->file('attachment')->getClientOriginalName(),
                    'project'
                );
            }elseif ($activity->type == "assignment") {
                Storage::disk('project')->makeDirectory($path.'/'.$activity->slug);
                $file = $req->file('attachment')->storeAs(
                    $path.$activity->slug,
                    $code.'_'.$req->file('attachment')->getClientOriginalName(),
                    'project'
                );
            }
            File::delete(public_path($activity->attachment));
            $activity->attachment = str_replace(env('APP_URL'),'',Storage::disk('project')->url($file));
        }
        if ($req->has('maxgrade')) {
            $activity->maxgrade = $req->maxgrade;
        }
        if ($req->has('timer')) {
            $activity->timer = $req->timer;
        }
        if ($req->has('desc')) {
            $activity->desc = nl2br($req->desc);
        }
        $activity->save();
        return redirect('/activity/detail/'.$activity->slug)->with(['msg' => 'Activity Updated!','color' => 'success']);

    }
    public function deleteActivity(Request $req)
    {
      $id = decrypt($req->token);
      $activity = Activity::find($id);
      $project = $activity->phase->project;
      File::delete(public_path($activity->attachment));
      $activity->delete();
      return redirect('/projects/detail/'.$project->code)->with(['msg' => 'Activity Deleted!','color' => 'success']);
    }

    //Comment
    public function v_editComment($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Comment::find($did);
        return view("user.comment.edit",["data" => $data, "eid" => $id]);
    }
    public function v_deleteComment($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Comment::find($did);
        return view("user.comment.delete",["data" => $data, "eid" => $id]);
    }

    public function insertComment(Request $req)
    {
        $req->validate([
            'message' => 'required|max:191',
            'activity_id' => 'required|exists:pro_activity,id',
            'user_id' => 'required|exists:users,id',
        ]);

        $comment = new Comment();
        $comment->message = $req->message;
        $comment->activity_id = $req->activity_id;
        $comment->user_id = $req->user_id;
        $comment->save();
        return redirect('/activity/detail/'.$comment->activity->slug)->with(['msg' => 'Comment Added!','color' => 'success']);
    }
    public function updateComment(Request $req)
    {
        $req->validate([
            'message' => 'required|max:191',
        ]);
        $id = decrypt($req->token);
        $comment = Comment::find($id);
        $comment->message = $req->message;
        $comment->save();
        return redirect('/activity/detail/'.$comment->activity->slug)->with(['msg' => 'Comment Updated!','color' => 'success']);
    }
    public function deleteComment(Request $req)
    {
      $id = decrypt($req->token);
      $comment = Comment::find($id);
      $comment->delete();
      return redirect('/activity/detail/'.$comment->activity->slug)->with(['msg' => 'Comment Deleted!','color' => 'success']);
    }

    //Submission
    public function insertAssignment(Request $req)
    {
        $req->validate([
            'activity_id' => 'required|exists:pro_activity,id',
            'user_id' => 'required|exists:users,id',
            'attachment' => 'nullable',
            'desc' => 'nullable|max:191',
        ]);
        $assignment = new Assignment();
        $assignment->user_id = $req->user_id;
        $assignment->activity_id = $req->activity_id;
        if ($req->has('attachment')) {
            $assignment->attachment = $req->attachment;
        }
        if ($req->has('desc')) {
            $assignment->desc = $req->desc;
        }
        $assignment->save();


        $activity = $assignment->activity;
        $phase = $activity->phase;
        $project = $phase->project;
        $path = $project->code.'/Assignment/'.$activity->slug;


        Storage::disk('project')->makeDirectory($path);
        Storage::disk('project')->put($path.'/',$req->file('attachment'));

        $user = $assignment->user;
        if($assignment->created_at > $phase->date_due){
            $projectUser = $project->projectuser;
            foreach($projectUser as $prou){
                $user = $prou->user;
                if($user->type == 2){
                    $details = [
                        'code' => $project->code,
                        'body' => $user->fullname.' Has Turned In The Assignment Late',
                        'link' => url()
                    ];
                    $user->notify(new ProjectNotification($details));
                }
            }
        }
        return redirect('/activities/')->with(['msg' => 'Assignment Added!','color' => 'success']);
    }
    public function updateAssignment(Request $req)
    {
        $req->validate([
            'attachment' => 'nullable',
            'desc' => 'nullable|max:191',
        ]);

        $id = decrypt($req->token);
        $assignment = Assignment::find($id);
        $old = $assignment->attachment;
        if ($req->has('attachment')) {
            $assignment->attachment = $req->attachment;
        }
        if ($req->has('desc')) {
            $assignment->desc = $req->desc;
        }
        $assignment->save();

        $activity = $assignment->activity;
        $phase = $activity->phase;
        $project = $phase->project;
        $path = $project->code.'/Assignment/'.$activity->slug;

        if($old) Storage::disk('project')->delete($path.'/'.$old);

        $user = $assignment->user;
        if($assignment->updated_at > $phase->date_due){
            $projectUser = $project->projectuser;
            foreach($projectUser as $prou){
                $user = $prou->user;
                if($user->type == 2){
                    $details = [
                        'code' => $project->code,
                        'body' => $user->fullname.' Has Turned In The Assignment Late',
                        'link' => url()
                    ];
                    $user->notify(new ProjectNotification($details));
                }
            }
        }
        return redirect('/activities/')->with(['msg' => 'Assignment Updated!','color' => 'success']);
    }
    public function deleteAssignment(Request $req)
    {
      $id = decrypt($req->token);
      $assignment = Assignment::find($id);
      $assignment->delete();
      return redirect('/activities/')->with(['msg' => 'Assignment Deleted!','color' => 'success']);
    }
}
