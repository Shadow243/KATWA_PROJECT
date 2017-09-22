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

Route::name('home')->get('/', 'HomeController@ShowWelcome');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/searchPost', 'PostController@show');

Route::group(['as' => 'inska::', 'prefix' => 'inska'], function(){
    //Home routes
    Route::name('blog')->get('/blog', ['as'=>'blog', 'uses' => 'PostController@index']);

    Route::get('/blog/{slug}', ['as'=>'blog::single', 'uses' => 'PostController@showOne']);

//    Route::get('/blog/search', ['as'=>'blog::search', 'uses' => 'PostController@show']);

    Route::post('/comment', ['as'=>'comment::store', 'uses' => 'PostController@storeComment']);

    Route::post('/store/like', ['as'=>'like::store', 'uses' => 'PostController@storeLike']);

    Route::delete('/comment/destroy/{comment}', ['as'=>'comment::destroy', 'uses' => 'PostController@destroyComment']);

    Route::get('/like/{post_id}', ['as'=>'like', 'uses' => 'PostController@storeLikes']);

    Route::name('contact')->get('/contact', ['as'=>'contact', 'uses' => 'ContactController@ShowContact']);

    Route::name('about')->get('/aboutUs', ['as'=>'about', 'uses' => 'HomeController@About']);

    //Message Routes
	Route::group(['prefix' => 'messages'], function () {

    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);

    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);

    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);

    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);

    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});
});
