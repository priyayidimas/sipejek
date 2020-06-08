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
    public function v_addMaterial($phase_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $project = Phase::find(decrypt($phase_id))->project;
        return view("_teacher.activity.add_material",["project" => $project, "phase_id" => $phase_id]);
    }
    public function v_addAssignment($phase_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $project = Phase::find(decrypt($phase_id))->project;
        return view("_teacher.activity.add_assignment",["project" => $project, "phase_id" => $phase_id]);
    }
    public function v_addQuiz($phase_id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $project = Phase::find(decrypt($phase_id))->project;
        return view("_teacher.activity.add_quiz",["project" => $project, "phase_id" => $phase_id]);
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
        if(Auth::user()->type == 1){
            return redirect('activity/detail/'.$data->slug.'/submission');
        }
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
            'maxscore' => 'nullable|integer',
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
                $file = $req->file('attachment')->storeAs(
                    $path."/".$activity->slug,
                    $code.'_'.$req->file('attachment')->getClientOriginalName(),
                    'project'
                );
            }
            $activity->attachment = str_replace(env('APP_URL'),'',Storage::disk('project')->url($file));
            // File::delete(public_path($activity->attachment));
        }
        if ($req->has('maxscore')) {
            $activity->maxscore = $req->maxscore;
        }
        if ($req->has('timer')) {
            $activity->timer = $req->timer;
        }
        if ($req->has('desc')) {
            $escape = htmlspecialchars($req->desc);
            $activity->desc = nl2br($escape);
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
            'maxscore' => 'nullable|integer',
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
                $file = $req->file('attachment')->storeAs(
                    $path."/".$activity->slug,
                    $code.'_'.$req->file('attachment')->getClientOriginalName(),
                    'project'
                );
            }
            File::delete(public_path($activity->attachment));
            $activity->attachment = str_replace(env('APP_URL'),'',Storage::disk('project')->url($file));
        }
        if ($req->has('maxscore')) {
            $activity->maxscore = $req->maxscore;
        }
        if ($req->has('timer')) {
            $activity->timer = $req->timer;
        }
        if ($req->has('desc')) {
            $escape = htmlspecialchars($req->desc);
            $activity->desc = nl2br($escape);
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

    public function insertComment(Request $req, $submission = null)
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

        $project = $comment->activity->phase->project;
        $projectUser = $project->projectuser;
        foreach($projectUser as $prou){
            $user = $prou->user;
            $cek = ($user->type == 1) ? 'submission' : ''; 
            $details = [
                'code' => $project->code,
                'header' => "New Comment",
                'body' => "Hi, $user->fullname ! ".$comment->user->fullname." Has Posted New Comment In ".$comment->activity->title,
                'link' => url('/activity/detail/'.$comment->activity->slug.'/'.$cek),
            ];
            if($user->id != Auth::id()){
                $user->notify(new ProjectNotification($details));
            }
        }

        if($submission != null){
            return redirect('/activity/detail/'.$comment->activity->slug.'/submission')->with(['msg' => 'Comment Added!','color' => 'success']);
        }else{
            return redirect('/activity/detail/'.$comment->activity->slug)->with(['msg' => 'Comment Added!','color' => 'success']);
        }
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
    public function detailSubmission($slug) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $data = Activity::where('slug','=',$slug)->first();
        if(Auth::user()->type > 1){
            return redirect('activity/detail/'.$data->slug);
        }
        if($data->type != 'quiz'){
            $submission = $data->assignmentUser()->where('user_id','=',Auth::id());
            if($submission->count() > 0){
                return view("_student.activity.detail_submitted",["data" => $data, "submission" => $submission->first(), "auth" => Auth::user()]);
            }else{
                return view("_student.activity.detail",["data" => $data, "auth" => Auth::user()]);
            }
        }else{
            $question = $data->questions()->first();
            $answers = $question->quizUser()->where('user_id','=',Auth::id());
            if($answers->count() > 0){
                return view("_student.activity.detail_quiz_submitted",["data" => $data, "answers" => $answers->get(), "auth" => Auth::user()]);
            }else{
                return view("_student.activity.detail_quiz",["answers" => $answers->get(), "data" => $data, "auth" => Auth::user()]);
            }
        }
    }
    public function editSubmission($id) {
        if (!Auth::check()) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Assignment::find($did);
        return view("_student.activity.edit",["data" => $data, "eid" => $id]);
    }

    public function insertAssignment(Request $req)
    {
        $req->validate([
            'attachment' => 'nullable',
            'desc' => 'nullable|max:191',
        ]);
        $activity = Activity::find(decrypt($req->token));
        $phase = $activity->phase;
        $project = $phase->project;

        $assignment = new Assignment();
        $assignment->user_id = Auth::id();
        $assignment->activity_id = decrypt($req->token);
        if ($req->has('attachment')) {
            $path = $project->code.'/'.$activity->type;
            $code = rand(0,1000);
            $filename = $code.'_'.$req->file('attachment')->getClientOriginalName();
            $file = $req->file('attachment')->storeAs(
                $path."/".$activity->slug,
                $filename,
                'project'
            );
            $assignment->attachment = str_replace(env('APP_URL'),'',Storage::disk('project')->url($file));
            $assignment->filename = $filename;
        }
        if ($req->has('desc')) {
            $escape = htmlspecialchars($req->desc);
            $assignment->desc = nl2br($escape);
        }
        $assignment->save();

        if($assignment->created_at > $phase->date_due){
            $sender = $assignment->user;
            $projectUser = $project->projectuser;
            foreach($projectUser as $prou){
                $user = $prou->user;
                if($user->type > 1){
                    $details = [
                        'code' => $project->code,
                        'header' => "Late Assignment",
                        'body' => $sender->fullname.' Has Turned In The Assignment Late',
                        'link' => url('/activity/detail/'.$assignment->activity->slug)
                    ];
                    $user->notify(new ProjectNotification($details));
                }
            }
        }
        return redirect('/activity/detail/'.$assignment->activity->slug.'/submission')->with(['msg' => 'Submission Sent!','color' => 'success']);
    }
    public function updateAssignment(Request $req)
    {
        $req->validate([
            'attachment' => 'nullable',
            'desc' => 'nullable|max:191',
        ]);
        $id = decrypt($req->token);
        $assignment = Assignment::find($id);

        $activity = $assignment->activity;
        $phase = $activity->phase;
        $project = $phase->project;


        if ($req->has('attachment')) {
            $path = $project->code.'/'.$activity->type;
            $code = rand(0,1000);
            $filename = $code.'_'.$req->file('attachment')->getClientOriginalName();
            $file = $req->file('attachment')->storeAs(
                $path."/".$activity->slug,
                $filename,
                'project'
            );
            File::delete(public_path($assignment->attachment));
            $assignment->attachment = str_replace(env('APP_URL'),'',Storage::disk('project')->url($file));
            $assignment->filename = $filename;
        }
        if ($req->has('desc')) {
            $escape = htmlspecialchars($req->desc);
            $assignment->desc = nl2br($escape);
        }
        $assignment->save();

        if($assignment->updated_at > $phase->date_due){
            $sender = $assignment->user;
            $projectUser = $project->projectuser;
            foreach($projectUser as $prou){
                $user = $prou->user;
                if($user->type > 1){
                    $details = [
                        'code' => $project->code,
                        'header' => "Late Assignment",
                        'body' => $sender->fullname.' Has Turned In The Assignment Late',
                        'link' => url('/activity/detail/'.$assignment->activity->slug)
                    ];
                    $user->notify(new ProjectNotification($details));
                }
            }
        }
        return redirect('/activity/detail/'.$assignment->activity->slug.'/submission')->with(['msg' => 'Submission Updated!','color' => 'success']);
    }
    public function deleteAssignment(Request $req)
    {
      $id = decrypt($req->token);
      $assignment = Assignment::find($id);
      $assignment->delete();
      return redirect('/activities/')->with(['msg' => 'Assignment Deleted!','color' => 'success']);
    }

    //Review
    public function v_reviewSubmission($id) {
        if (!Auth::check() || Auth::user()->type == 1) {
            return redirect('/');
        }
        $did = decrypt($id);
        $data = Assignment::find($did);
        return view("_teacher.activity.review.assignment",["data" => $data, "eid" => $id]);
    }
    public function reviewSubmission(Request $req)
    {
        $id = decrypt($req->token);
        $assignment = Assignment::find($id);
        $activity = $assignment->activity;
        $phase = $activity->phase;
        $project = $phase->project;

        $req->validate([
            'maxscore' => 'integer',
            'score' => 'nullable|integer|max:'.$activity->maxscore,
            'review' => 'nullable',
        ]);




        if($req->score != ''){
            $assignment->score = $req->score;
        }
        if($req->review != ''){
            $assignment->review = $req->review;
        }
        $assignment->save();

        $user = $assignment->user;
        $details = [
            'code' => $project->code,
            'header' => "Assignment Reviewed",
            'body' => 'Your Submission Has Been Reviewed',
            'link' => url('/activity/detail/'.$assignment->activity->slug)
        ];
        $user->notify(new ProjectNotification($details));

        return redirect('/activity/detail/'.$assignment->activity->slug)->with(['msg' => 'Submission Reviewed!','color' => 'success']);
    }
}
