<?php

namespace App\model;
use Illuminate\Database\Eloquent\Model;


class Assignment extends Model
{
    protected $table = 'pro_act_assignment_x_user';
    public $incrementing = true;
    
    //This is Pivot For Parent Table
    public function activity()
    {
        return $this->belongsTo('App\model\Activity','activity_id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\model\User','user_id');
    }
}
