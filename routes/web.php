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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[
  'uses' => 'TodosController@index',
  'as'   => 'index'
  ]);

Route::get('/delete/todo/{id}',[
  'uses' => 'TodosController@deleteTodo',
  'as'   => 'delete'
]);

Route::get('/setComplited/{id}',[
  'uses'  => 'TodosController@setAsCompleted',
  'as'    => "completed"
]);

Route::get('/edite/todo/{id}',[
  'uses'  => 'TodosController@editeTodo',
  'as'    => 'edite'
]);

Route::post('/save/todo/{id}', [
  'uses'  => 'TodosController@saveTodo',
  'as'    =>  'save'
]);

Route::post('/add/todo', [
  'uses' => 'TodosController@addTodo'
]);
