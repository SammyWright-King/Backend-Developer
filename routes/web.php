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

Route::get('/posts', 'PostsController@index')->name('posts');

Route::get('/posts/new', 'PostsController@store')->name('new_post');
Route::post('/posts/new', 'PostsController@store')->name('store_post');
Route::get('/posts/{post_id}', 'PostsController@show')->name('replies');
Route::post('/posts/{post_id}/update', 'PostsController@update')->name('update_post');
Route::get('/posts/{post_id}/delete', 'PostsController@destroy')->name('delete_post');


Route::get('/posts/answer/{answer_id}', 'AnswerController@destroy')->name('delete_answer');
Route::post('/post/{post_id}/answer', 'AnswerController@save')->name('save_answer');
Route::get('/posts/{post_id}/answer/{answer_id}','AnswerController@show');
Route::put('/posts/{post_id}/answer/{answer_id}', 'AnswerController@update');






