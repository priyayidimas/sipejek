<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PrequestionUser extends Model
{
    protected $table = 'pro_prequestion_x_user';

    //This is Pivot For Parent Table
    public function prequestion()
    {
        return $this->belongsTo('App\model\Prequestion','prequestion_id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\model\User','user_id');
    }
}
