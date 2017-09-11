<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('info','ListsController@info');

//Route::get('test1','StudentController@test1');

Route::any('test1',['uses'=>'StudentController@test1']);
Route::any('query',['uses'=>'StudentController@query']);
Route::any('orm1',['uses'=>'StudentController@orm1']);
/* Route::get('basicl',function(){
	return 'heollworld';
});
Route::post('basic2',function(){
	return 'heoll';
});
Route::match(['get','post'],'multy',function(){
	return 'milty';
}); */
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
