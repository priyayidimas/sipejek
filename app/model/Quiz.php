<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'pro_act_quiz_question';

    //One-To-Many
    public function choices()
    {
        return $this->hasMany('App\model\QuizChoice','question_id');
    }

    //One-To-Many (Inversed)
    public function activity()
    {
        return $this->belongsTo('App\model\Activity','activity_id');
    }

    //Many-To-Many
    public function quizUser()
    {
        return $this->hasMany('App\model\QuizUser','question_id');
    }
}
