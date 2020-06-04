<?php 

namespace App\Providers;

use Alexusmai\LaravelFileManager\Services\ACLService\ACLRepository;
use Illuminate\Support\Facades\Auth;
use App\model\User;
use App\model\Project;
use App\model\ProjectUser;

class UploadServiceProvider implements ACLRepository
{
    /**
     * Get user ID
     *
     * @return mixed
     */
    public function getUserID()
    {
        return Auth::id();
    }

    /**
     * Get rules from file-manger.php config file
     *
     * @return array
     */
    public function getRules(): array
    {
        if (Auth::id() === 1) {
            return [
                ['disk' => 'public', 'path' => '*', 'access' => 2],
                ['disk' => 'project', 'path' => '*', 'access' => 2],
            ];
        }else{
            $arr = [['disk' => 'project', 'path' => '/', 'access' => 2]];
            $projectUser = User::find(Auth::id())->projectuser;
            foreach ($projectUser as $inter) {
                array_push($arr,['disk' => 'project', 'path' => $inter->project->code,'access' => 1]);
                array_push($arr,['disk' => 'project', 'path' => $inter->project->code.'/*','access' => 2]);
            }
            return $arr;
        }
        // return [
        //     ['disk' => 'public', 'path' => '/', 'access' => 1],                                  // main folder - read
        //     // ['disk' => 'public', 'path' => 'users', 'access' => 1],                              // only read
        //     // ['disk' => 'public', 'path' => 'users/'. Auth::user()->name, 'access' => 1],        // only read
        //     // ['disk' => 'public', 'path' => 'users/'. Auth::user()->name .'/*', 'access' => 2],  // read and write
        // ];
    }
}
