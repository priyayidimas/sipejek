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

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('logout', 'UserController@logout');

Route::post('newPassword', 'UserController@newPassword');
Route::post('updateProfile', 'UserController@updateProfile');

Route::get('dashboard', 'UserController@dashboard');
Route::get('myProfile', 'UserController@myProfile');

//USERS
Route::get('users', 'UserController@view');
Route::get('users/edit/{id}', 'UserController@editbyid');
Route::get('users/delete/{id}', 'UserController@deletebyid');

Route::post('users/add', 'UserController@insertUser');
Route::post('users/edit', 'UserController@updateUser');
Route::post('users/delete', 'UserController@deleteUser');

//PROJECT
Route::get('projects', 'ProjectController@index');
Route::get('projects/edit/{id}', 'ProjectController@editbyid');
Route::get('projects/delete/{id}', 'ProjectController@deletebyid');
Route::get('projects/detail/{id}', 'ProjectController@detail');

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

//Project X Users
Route::get('projectuser/add/{project_id}', 'ProjectController@addprojectbyid');
Route::get('projectuser/delete/{id}', 'ProjectController@deleteprojectbyid');

Route::post('projectuser/add', 'ProjectController@insertProjectUser');
Route::post('projectuser/delete', 'ProjectController@deleteProjectUser');

//Phase
Route::get('phase/add/{project_id}', 'ProjectController@addphasebyid');
Route::get('phase/edit/{id}', 'ProjectController@editphasebyid');
Route::get('phase/delete/{id}', 'ProjectController@deletephasebyid');
Route::get('phase/detail/{id}', 'ProjectController@detailphase');

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
