<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Activity;
use App\model\Comment;
use App\model\Assignment;

class ActivityController extends Controller
{
    public function insertActivity(Request $req)
    {
        $activity = new Activity();
        $activity->title = $req->title;
        $activity->type = $req->type;
        $activity->phase_id = $req->phase_id;
        if ($req->has('attachment')) {
            $activity->attachment = $req->attachment;
        }
        if ($req->has('timer')) {
            $activity->timer = $req->timer;
        }
        if ($req->has('desc')) {
            $activity->desc = $req->desc;
        }
        $activity->save();
        return redirect('/activities/')->with(['msg' => 'Activity Added!','color' => 'success']);
    }
    public function updateActivity(Request $req)
    {
        $id = decrypt($req->token);
        $activity = Activity::find($id);
        $activity->title = $req->title;
        $activity->type = $req->type;
        if ($req->has('attachment')) {
            $activity->attachment = $req->attachment;
        }
        if ($req->has('timer')) {
            $activity->timer = $req->timer;
        }
        if ($req->has('desc')) {
            $activity->desc = $req->desc;
        }
        $activity->save();
        return redirect('/activities/')->with(['msg' => 'Activity Updated!','color' => 'success']);
    }
    public function deleteActivity(Request $req)
    {
      $id = decrypt($req->token);
      $activity = Activity::find($id);
      $activity->delete();
      return redirect('/activities/')->with(['msg' => 'Activity Deleted!','color' => 'success']);
    }
    public function insertComment(Request $req)
    {
        $comment = new Comment();
        $comment->message = $req->message;
        $comment->activity_id = $req->activity_id;
        $comment->user_id = $req->user_id;
        $comment->save();
        return redirect('/prequestions/')->with(['msg' => 'Comment Added!','color' => 'success']);
    }
    public function updateComment(Request $req)
    {
        $id = decrypt($req->token);
        $comment = Comment::find($id);
        $comment->message = $req->message;
        $comment->save();
        return redirect('/prequestions/')->with(['msg' => 'Comment Updated!','color' => 'success']);
    }
    public function deleteComment(Request $req)
    {
      $id = decrypt($req->token);
      $comment = Comment::find($id);
      $comment->delete();
      return redirect('/prequestions/')->with(['msg' => 'Comment Deleted!','color' => 'success']);
    }
    public function insertAssignment(Request $req)
    {
        $assignment = new Assignment();
        $assignment->user_id = $req->user_id;
        $assignment->activity_id = $req->activity_id;
        if ($req->has('attachment')) {
            $assignment->attachment = $req->attachment;
        }
        if ($req->has('grade')) {
            $assignment->grade = $req->grade;
        }
        if ($req->has('desc')) {
            $assignment->desc = $req->desc;
        }
        $assignment->save();
        return redirect('/activities/')->with(['msg' => 'Assignment Added!','color' => 'success']);
    }
    public function updateAssignment(Request $req)
    {
        $id = decrypt($req->token);
        $assignment = Assignment::find($id);
        if ($req->has('attachment')) {
            $assignment->attachment = $req->attachment;
        }
        if ($req->has('grade')) {
            $assignment->grade = $req->grade;
        }
        if ($req->has('desc')) {
            $assignment->desc = $req->desc;
        }
        $assignment->save();
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
