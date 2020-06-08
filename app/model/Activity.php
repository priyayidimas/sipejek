<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'pro_activity';

    //This is One-To-Many
    public function questions(){
        return $this->hasMany('App\model\Quiz','activity_id');
    }
    public function answers(){
        return $this->hasManyThrough('App\model\QuizUser','App\model\Quiz','activity_id','question_id');
    }
    
    //This is One-To-Many (Inversed)
    public function phase()
    {
        return $this->belongsTo('App\model\Phase','phase_id');
    }

    //This is Many-To-Many
    public function commentUser()
    {
        return $this->hasMany('App\model\Comment','activity_id');
    }
    public function assignmentUser()
    {
        return $this->hasMany('App\model\Assignment','activity_id');
    }
}
