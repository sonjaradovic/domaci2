<?php


use App\Post;
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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/professor', 'ProfessorController@index');

Route::resource('user/plan','UsersController');

Route::resource('users','UsersManagementController');

Route::resource('/blog','BlogController');

Route::resource('/message','MessageController');

Route::resource('/editProfessor','ProfessorEditController@edit');

Route::post('submit','PostBlogPost@save');

Route::post('/submitMessage','PostMessageController@save');

Route::resource('/deleteMessage', 'MessageController@destroy');

Route::post('/admin/submitProfessorMessage','PostMessageController@saveProfessor');

Route::get('/admin/login','Auth\ProfessorLoginController@showLoginForm')->name('admin.login');

Route::post('/admin/login','Auth\ProfessorLoginController@login')->name('admin.login.submit');

Route::get('/admin','AdminController@index')->name('admin.dashboard');

Route::get('/admin/messaging','AdminController@view');

// REST API
Route::get('post', 'BlogApiController@index');
Route::get('post/{id}', 'BlogApiController@show');
Route::post('post', 'BlogApiController@store');
Route::put('post/{id}', 'BlogApiController@update');
Route::delete('post/{id}', 'BlogApiController@delete');
Route::delete('post', 'BlogApiController@deleteAll');
