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

Route::get('/',[
    'uses'=>'ExampleController@index',
    'as' => '/'
]);

Route::get('job/add-job', [
    'uses'  =>  'JobController@addJob',
    'as'    =>  'add-job'
]);

Route::get('job/manage-job', [
    'uses'  =>  'JobController@manageJob',
    'as'    =>  'manage-job'
]);

Route::post('job/new-job', [
    'uses'  =>  'JobController@newJob',
    'as'    =>  'new-job'
]);





Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
