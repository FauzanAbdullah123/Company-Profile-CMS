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

Route::get('/', function () {
    return view('index');
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


//Route Backend
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/', function() {
        return view('admin.index');
    });
    //Route Page About
    Route::resource('/user', 'UserController');
    Route::resource('/about', 'AboutController');
    Route::post('/about/update', 'AboutController@update')->name('about.update');
    Route::get('/about/destroy/{id}', 'AboutController@destroy');
    //Route Page Service
    Route::resource('/service', 'ServiceController');
    Route::post('/service/update', 'ServiceController@update')->name('service.update');
    Route::get('/service/destroy/{id}', 'ServiceController@destroy');
    //Route Page Gallery
    Route::resource('/gallery', 'GalleryController');
    Route::post('/gallery/update', 'GalleryController@update')->name('gallery.update');
    Route::get('/gallery/destroy/{id}', 'GalleryController@destroy');
    //Route Page Logs
    Route::get('/logs', 'LogController@index')->name('logs.index');
    Route::delete('/logs/{id}', 'LogController@destroy')->name('logs.destroy');
    //Route Page Article
    Route::resource('/article', 'ArticleController');
    //Route Page Category
    Route::resource('/category', 'CategoryController');
    //Route Page Tag
    Route::resource('/tag', 'TagController');
});

Route::group(['prefix' => '', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
     //Route Page Article
     Route::resource('/article', 'ArticleController');
     //Route Page Category
     Route::resource('/category', 'CategoryController');
     //Route Page Tag
     Route::resource('/tag', 'TagController');
});

// Route Frontend
Route::group(['prefix'=>'/'], function(){
    Route::get('/','FrontendController@index');
    Route::get('/about','FrontendController@about');
    Route::get('/services','FrontendController@services');
    Route::get('/gallery','FrontendController@gallery');
    Route::get('/blog','FrontendController@blog');  
    Route::get('/single-blog','FrontendController@singleblog');  
});
