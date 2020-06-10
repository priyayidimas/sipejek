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

Route::get('/', 'UserController@index');
Route::get('register', 'UserController@v_register');
Route::get('home', 'UserController@home');

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('logout', 'UserController@logout');

Route::post('newPassword', 'UserController@newPassword');
Route::post('updateProfile', 'UserController@updateProfile');

Route::get('dashboard', 'UserController@dashboard');
Route::get('myProfile', 'UserController@myProfile');

Route::get('showNotification', 'UserController@showNotification');
//USERS
Route::get('users', 'UserController@view');
Route::get('users/verify/{id}', 'UserController@verify');
Route::get('users/edit/{id}', 'UserController@editbyid');
Route::get('users/edit/{id}/{project_id}', 'UserController@editbyid');
Route::get('users/delete/{id}', 'UserController@deletebyid');
Route::get('users/delete/{id}/{project_id}', 'UserController@deletebyid');
Route::get('users/detail/{id}', 'UserController@detail');


Route::post('users/add', 'UserController@insertUser');
Route::post('users/edit', 'UserController@updateUser');
Route::post('users/delete', 'UserController@deleteUser');

//PROJECT
Route::get('projects', 'ProjectController@index');
Route::get('projects/edit/{id}', 'ProjectController@editbyid');
Route::get('projects/delete/{id}', 'ProjectController@deletebyid');
Route::get('projects/detail/{code}', 'ProjectController@detail');

Route::post('projects/add', 'ProjectController@insertProject');
Route::post('projects/edit', 'ProjectController@updateProject');
Route::post('projects/delete', 'ProjectController@deleteProject');

//Prequestions
Route::get('prequestion/add/{project_id}', 'PrequestionController@add');
Route::get('prequestion/edit/{id}', 'PrequestionController@edit');
Route::get('prequestion/delete/{id}', 'PrequestionController@delete');
Route::get('prequestion/detail/{id}', 'PrequestionController@detail');
Route::get('prequestion/closeforum/{project_id}', 'PrequestionController@closeforum');

Route::post('prequestion/add', 'PrequestionController@insertPrequestion');
Route::post('prequestion/edit', 'PrequestionController@updatePrequestion');
Route::post('prequestion/delete', 'PrequestionController@deletePrequestion');
Route::post('prequestion/closeforum', 'ProjectController@closeForum');

Route::get('prequestion/answer/add/{prequestion_id}', 'PrequestionController@v_addAnswer');
Route::post('prequestion/answer/add', 'PrequestionController@insertPrequestionUser');
Route::post('prequestion/answer/edit', 'PrequestionController@updatePrequestionUser');

//Project X Users
Route::get('projectuser/add/{project_id}', 'ProjectController@addprojectbyid');
Route::get('projectuser/delete/{id}', 'ProjectController@deleteprojectbyid');

Route::post('projectuser/add', 'ProjectController@insertProjectUser');
Route::post('projectuser/delete', 'ProjectController@deleteProjectUser');

//Phase
Route::get('phase/add/{project_id}', 'ProjectController@addphasebyid');
Route::get('phase/edit/{id}', 'ProjectController@editphasebyid');
Route::get('phase/delete/{id}', 'ProjectController@deletephasebyid');
// Route::get('phase/detail/{id}', 'ProjectController@detailphase');

Route::post('phase/add', 'ProjectController@insertPhase');
Route::post('phase/edit', 'ProjectController@updatePhase');
Route::post('phase/delete', 'ProjectController@deletePhase');

//Activity
Route::get('activity/add/material/{phase_id}', 'ActivityController@v_addMaterial');
Route::get('activity/add/assignment/{phase_id}', 'ActivityController@v_addAssignment');

Route::get('activity/edit/{id}', 'ActivityController@v_editActivity');
Route::get('activity/delete/{id}', 'ActivityController@v_deleteActivity');
Route::get('activity/detail/{slug}', 'ActivityController@detailActivity');

Route::post('activity/add', 'ActivityController@insertActivity');
Route::post('activity/edit', 'ActivityController@updateActivity');
Route::post('activity/delete', 'ActivityController@deleteActivity');

//Assignment
Route::get('activity/detail/{slug}/submission', 'ActivityController@detailSubmission');
Route::get('submission/edit/{id}', 'ActivityController@editSubmission');

Route::post('submission/add', 'ActivityController@insertAssignment');
Route::post('submission/edit', 'ActivityController@updateAssignment');

//Comments
Route::get('comment/edit/{id}', 'ActivityController@v_editComment');
Route::get('comment/delete/{id}', 'ActivityController@v_deleteComment');

Route::post('comment/add/{submission?}', 'ActivityController@insertComment');
Route::post('comment/edit', 'ActivityController@updateComment');
Route::post('comment/delete', 'ActivityController@deleteComment');

//Quiz
Route::get('activity/add/quiz/{phase_id}', 'ActivityController@v_addQuiz');
Route::post('activity/add/quiz/', 'QuizController@newQuiz');

//Question
Route::get('question/add/{activity_id}', 'QuizController@v_addQuestion');
Route::get('question/edit/{id}', 'QuizController@v_editQuestion');
Route::get('question/delete/{id}', 'QuizController@v_deleteQuestion');

Route::post('question/add/', 'QuizController@insertQuestion');
Route::post('question/edit', 'QuizController@updateQuestion');
Route::post('question/delete', 'QuizController@deleteQuestion');

Route::post('answer/add/', 'QuizController@insertAnswer');
Route::post('answer/edit', 'QuizController@updateAnswer');

//Review
Route::get('reviewAssignment/{id}', 'ActivityController@v_reviewSubmission');
Route::post('reviewAssignment', 'ActivityController@reviewSubmission');

Route::get('reviewQuiz/{userid}/{activityid}', 'QuizController@v_reviewSubmission');
Route::post('reviewQuiz', 'QuizController@reviewSubmission');

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

Route::get('exportFile', function () {
    $pdf = PDF::loadView('debug.pdf');
    return $pdf->download('theFile.pdf');
});
Route::get('pdf', function () {
    return view('debug.pdf');
});
Route::get('lfm', function () {
    return view('debug.lfm');
});
Route::get('init', function () {
    Storage::disk('project')->makeDirectory('BIO100/Assignment');
    Storage::disk('project')->makeDirectory('BIO100/Material');
    $arr = [['disk' => 'project', 'path' => '/', 'access' => 2]];
    $projectUser = App\model\User::find(Auth::id())->projectuser;
    foreach ($projectUser as $inter) {
        array_push($arr,['disk' => 'project', 'path' => $inter->project->code,'access' => 2]);
    }
    "?leftDisk=project&leftPath=MAT200/Assignment/Assignment#01";
    "?leftDisk=project&leftPath=MAT200/Material";
});
Route::get('activity/{id}', function ($id) {
    $act = App\model\Activity::find(1);
    $phase = $act->phase;
    $project = $phase->project;
    dd($project->created_at);
});

Route::get('file', function () {
    return view('debug.file');
});
Route::post('file', 'UserController@file');

//Notify Route
Route::get('/notify', function () {

    //Create Notif
    $project = \App\model\Project::find(1);
    $projectUser = $project->projectuser;
    foreach($projectUser as $prou){
        $user = $prou->user;
        $details = [
            'code' => $project->code,
            'header' => "New Assignment",
            'body' => "Hi, ".$user->fullname."! Your Teacher Has Posted New Assignment In ".$project->code." - ".$project->title,
            'link' => url('/activity/detail/perkenalan-networking-666'),
        ];
        $user->notify(new \App\Notifications\ProjectNotification($details));
    }
    // Notification::send($user, new \App\Notifications\ProjectNotification($details));

    //Show Notif
    // $user = App\model\User::find(2);
    // foreach ($user->notifications as $notification) {
    //     echo $notification->data['data']."<br>";
    // }
    // foreach ($user->unreadNotifications as $notification) {
    //     echo $notification->data['data']."<br>";
    //     if(isset($notification->data['code'])){
    //         $notification->markAsRead();
    //     }
    // }
    // dd($user->unreadNotifications->count());

});
