<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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
	Alert::success('Success Title', 'Success Message');

    return view('welcome');
});
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/services', 'FrontController@services')->name('services');
Route::get('/projects', 'FrontController@projects')->name('projects');
Route::get('/contact', 'FrontController@contact')->name('contact');




// Backend route ====================================


// Posts
Route::get('/add_post', 'Backend\PostController@index')->name('addPost');
Route::post('/save_post', 'Backend\PostController@StorPosts')->name('savePost');
Route::get('/all_post', 'Backend\PostController@allPosts')->name('allPost');
Route::get('/edit-post/{id}', 'Backend\PostController@editPosts')->name('EditPost');
Route::post('/update-post', 'Backend\PostController@updatePost')->name('updatePost');
Route::get('/delete-post/{id}', 'Backend\PostController@DeletePost')->name('DeletePost');

// application
Route::get('/all-application', 'Backend\ApplicationController@index')->name('allApplication');
Route::get('/add-application', 'Backend\ApplicationController@create')->name('addApplication');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

