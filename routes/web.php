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

Route::get('/home', function () {
    return view('pages.index');
});
Route::get('/blog', function () {
    return view('pages.blog');
});

/*
Route::get('/user/{id}',function($id){
    return 'This is a practice session by '.$id;
});

*/
Route::get('/','PagesController@index')->name('index');

Route::get('/about','PagesController@about')->name('about');

Route::get('/services','PagesController@services')->name('services');

Route::get('/contact', 'PagesController@contact')->name('contact');

Route::get('/p', 'PostsController@post')->name('posts');


Route::resource('posts','PostsController');