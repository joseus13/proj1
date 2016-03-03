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
Route::get('/', 'pagesController@home');

//Route::get('/', function () {
	//$people = ['p1', 'p2', 'p3'];
    //return view('pages.students.displayStudent')->with('people', $people);
//});

Route::get('/upload', 'uploadController@upload');
//{
//  return View::make('pages.upload');
//});

Route::post('apply/upload', 'uploadController@upload');

route::get('/cards', 'cardsController@index');
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
