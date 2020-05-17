<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(!Auth::check()){
        return view('welcome');
    }else{
        return redirect('/dashboard');
    }
});
Route::get('register', function () {
    return view('register');
});
Route::get('navbar', function () {
    return view('navbar');
});

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('logout', 'UserController@logout');
Route::post('newPassword', 'UserController@newPassword');
Route::post('updateProfile', 'UserController@updateProfile');

Route::get('dashboard', 'UserController@dashboard');
// Route::get('dashboard', function () {
//     if (!Auth::check()) {
//         return redirect('/');
//     }
//     return view("dashboard");
// });
Route::get('myProfile', function () {
    if (!Auth::check()) {
        return redirect('/');
    }
    return view("user.profile",["data" => Auth::user()]);
});

//USERS
Route::get('users', function () {
    if (!Auth::check()) {
        return redirect('/');
    }
    $data = App\model\User::get();
    return view("user.view",["data" => $data]);
});
Route::get('users/edit/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\User::find($did);
    return view("user.edit",["data" => $data, "eid" => $id]);
});
Route::get('users/delete/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\User::find($did);
    return view("user.delete",["data" => $data, "eid" => $id]);
});
Route::post('users/add', 'UserController@insertUser');
Route::post('users/edit', 'UserController@updateUser');
Route::post('users/delete', 'UserController@deleteUser');

//PROJECT
Route::get('projects', function () {
    if (!Auth::check()) {
        return redirect('/');
    }
    $data = App\model\Project::get();
    return view("project.view",["data" => $data]);
});
Route::get('projects/edit/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\Project::find($did);
    return view("project.edit",["data" => $data, "eid" => $id]);
});
Route::get('projects/delete/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\Project::find($did);
    return view("project.delete",["data" => $data, "eid" => $id]);
});
Route::get('projects/detail/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\Project::find($did);
    return view("project.detail",["data" => $data, "eid" => $id]);
});
Route::post('projects/add', 'ProjectController@insertProject');
Route::post('projects/edit', 'ProjectController@updateProject');
Route::post('projects/delete', 'ProjectController@deleteProject');

//Prequestions
Route::get('prequestion/add/{project_id}', function ($project_id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    return view("prequestion.add",["project_id" => $project_id]);
});
Route::get('prequestion/edit/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\Prequestion::find($did);
    return view("prequestion.edit",["data" => $data, "eid" => $id]);
});
Route::get('prequestion/delete/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\Prequestion::find($did);
    return view("prequestion.delete",["data" => $data, "eid" => $id]);
});
Route::get('prequestion/detail/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\Prequestion::find($did);
    return view("prequestion.detail",["data" => $data, "eid" => $id]);
});
Route::get('prequestion/closeforum/{project_id}', function ($project_id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    return view("prequestion.closeforum",["project_id" => $project_id]);
});
Route::post('prequestion/add', 'PrequestionController@insertPrequestion');
Route::post('prequestion/edit', 'PrequestionController@updatePrequestion');
Route::post('prequestion/delete', 'PrequestionController@deletePrequestion');
Route::post('prequestion/closeforum', 'ProjectController@closeForum');

//Project X Users
Route::get('prequestion/add/{project_id}', function ($project_id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    return view("project.user_add",["project_id" => $project_id]);
});
Route::get('projectuser/delete/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\ProjectUser::find($did);
    return view("project.user_delete",["data" => $data, "eid" => $id]);
});
Route::post('projectuser/add', 'ProjectController@insertProjectUser');
Route::post('projectuser/delete', 'ProjectController@deleteProjectUser');

//Phase
Route::get('phase/add/{project_id}', function ($project_id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    return view("phase.add",["project_id" => $project_id]);
});
Route::get('phase/edit/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\Phase::find($did);
    return view("phase.edit",["data" => $data, "eid" => $id]);
});
Route::get('phase/delete/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\Phase::find($did);
    return view("phase.delete",["data" => $data, "eid" => $id]);
});
Route::get('phase/detail/{id}', function ($id) {
    if (!Auth::check()) {
        return redirect('/');
    }
    $did = decrypt($id);
    $data = App\model\Phase::find($did);
    return view("phase.detail",["data" => $data, "eid" => $id]);
});

Route::post('phase/add', 'ProjectController@insertPhase');
Route::post('phase/edit', 'ProjectController@updatePhase');
Route::post('phase/delete', 'ProjectController@deletePhase');

//DEBUG
Route::get('demo-css', function () {
    return view('debug.demo-css');
});
Route::get('demo-js', function () {
    return view('debug.demo-js');
});
Route::get('component', function () {
    return view('debug.component');
});
Route::get('file', function () {
    return view('debug.file');
});
Route::get('exportFile', function () {
    $pdf = PDF::loadView('debug.pdf');
    return $pdf->download('theFile.pdf');
});
Route::post('file', 'UserController@file');
Route::get('pdf', function () {
    return view('debug.pdf');
});
