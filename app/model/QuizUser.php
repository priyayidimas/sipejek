<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;


class QuizUser extends Model
{
    protected $table = 'pro_act_quiz_x_user';

    //This is Pivot For Parent Table
    public function quiz()
    {
        return $this->belongsTo('App\model\Quiz','question_id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\model\User','user_id');
    }
}
