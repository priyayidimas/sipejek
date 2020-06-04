<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class ProjectUser extends Model
{
    protected $table = 'project_x_user';
    
    //This is Pivot For Parent Table
    public function project()
    {
        return $this->belongsTo('App\model\Project','project_id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\model\User','user_id');
    }
}
