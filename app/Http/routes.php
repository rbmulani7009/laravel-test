<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */


Route::get('/', "HomeController@index");

//Route::get('users', "UsersController@index");
//Route::get('users/create', "UsersController@create");
//Route::get('users/{id}', "UsersController@show");
//
//Route::post('users', "UsersController@store");

Route::resource('users', "UsersController");

//Route::get('tasks', "TasksController@index");
//Route::get('tasks/create', "TasksController@create");
//Route::get('tasks/{id}', "TasksController@show");
//
//Route::post('tasks', "TasksController@store");

Route::resource('tasks', "TasksController");

Route::auth();

