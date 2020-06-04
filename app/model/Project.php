<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';


    //One-To-Many
    public function phases()
    {
        return $this->hasMany('App\model\Phase','project_id');
    }
    public function prequestions()
    {
        return $this->hasMany('App\model\Prequestion','project_id');
    }

    //Many-To-Many Using Pivot Project_x_User, disguised as (One-To-Many)-(Many-To-One)-(One-To-Many)
    public function projectUser()
    {
        return $this->hasMany('App\model\ProjectUser','project_id');
    }
}
