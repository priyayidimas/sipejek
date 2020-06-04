<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Notifiable;
    protected $table = 'users';


    //This is Many-To-Many Relationship, Defined By Pivot
    public function commentUser()
    {
        return $this->hasMany('App\model\Comment','user_id');
    }
    public function projectUser()
    {
        return $this->hasMany('App\model\ProjectUser','user_id');
    }
    public function prequestionUser()
    {
        return $this->hasMany('App\model\PrequestionUser','user_id');
    }
    public function assignmentUser()
    {
        return $this->hasMany('App\model\Assignment','user_id');
    }
    public function quizUser()
    {
        return $this->hasMany('App\model\QuizUser','user_id');
    }
}
