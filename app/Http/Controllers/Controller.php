<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function slugger($string,$replace){
        $char = ['\\','/',':',';','?','*','&','<','>','#','$',' ','|','+','\'','\"'];
        $normalize = str_replace($char,$replace,$string);
        return strtolower($normalize);
    }
    public static function randomString($length = 6)
    {
        $char = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz";
        $rand = "";
        for($i = 0; $i < $length; $i++){
            $rand = $rand.$char[rand(0, strlen($char)-1)];
        }
        return $rand;
    }
}
