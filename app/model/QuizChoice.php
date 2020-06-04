<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class QuizChoice extends Model
{
    protected $table = 'pro_act_quiz_choice';

    //One-To-Many (Inversed)
    public function question()
    {
        return $this->belongsTo('App\model\Quiz','question_id');
    }
}
