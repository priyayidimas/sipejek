<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
    protected $table = 'pro_phase';

    //This is One-to-many
    public function activities()
    {
        return $this->hasMany('App\model\Activity','phase_id');
    }

    //This is One-to-many (inversed)
    public function project()
    {
        return $this->belongsTo('App\model\Project','project_id');
    }
}
