<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('ajax/blog/history', 'BlogController@ajaxHistory')->name('ajax.blog.history');
Route::post('ajax/blog/posts', 'BlogController@ajaxGetPosts')->name('ajax.blog.posts');
Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{slug}', 'BlogController@show')->name('blog.post');
Route::put('/blog/{slug}', 'BlogController@addComment');

Route::get('/login', function(){
    return redirect('/backend/login');
});

Route::group(['prefix' => 'backend'], function(){
    Auth::routes();

    Route::group(['middleware' => ['auth']], function(){
        Route::get('/', 'BackendController@index')->name('backend');
        Route::resource('posts', 'Backend\PostController');
        Route::resource('tags', 'Backend\TagController');
        Route::resource('comments', 'Backend\CommentController', ['only' => ['index', 'destroy']]);
        Route::patch('comments/{id}/toggleStatus', 'Backend\CommentController@toggleStatus')->name('comment.toggle.status');

        // File manager...
        Route::resource('files', 'Backend\FileController');
    });
});


Route::get('/home', 'HomeController@index');
