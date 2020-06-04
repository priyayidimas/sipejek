<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Prequestion extends Model
{
    protected $table = 'pro_prequestion';

    //This is One-To-Many (Inversed)
    public function project()
    {
        return $this->belongsTo('App\model\Project','project_id');
    }

    //This is Many-To-Many using Pivot Prequestion_x_User
    public function prequestionUser()
    {
        return $this->hasMany('App\model\PrequestionUser','prequestion_id');
    }
}
