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

Auth::routes(['verify' => true, 'register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


//Route Backend
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/', function() {
        return view('admin.index');
    });
    //Route Page Manages User
    Route::resource('/user', 'UserController');
    //Route Page About
    Route::resource('/about', 'AboutController');
    Route::post('/about/update', 'AboutController@update')->name('about.update');
    Route::get('/about/destroy/{id}', 'AboutController@destroy');
    //Route Page Service
    Route::resource('/service', 'ServiceController');
    Route::post('/service/update', 'ServiceController@update')->name('service.update');
    Route::get('/service/destroy/{id}', 'ServiceController@destroy');
     //Route Page OtherService
    Route::resource('/other-service', 'OtherServiceController');
    Route::post('/other-service/update', 'OtherServiceController@update')->name('other-service.update');
    Route::get('/other-service/destroy/{id}', 'OtherServiceController@destroy');
    //Route Page Gallery
    Route::resource('/gallery', 'GalleryController');
    Route::post('/gallery/update', 'GalleryController@update')->name('gallery.update');
    Route::get('/gallery/destroy/{id}', 'GalleryController@destroy');
    //Route Page Logs
    Route::get('/logs', 'LogController@index')->name('logs.index');
    Route::delete('/logs/{id}', 'LogController@destroy')->name('logs.destroy');
    //Route Page Settings Sliders
    Route::resource('/sliders', 'SlidersController');
    Route::post('/sliders/update', 'SlidersController@update')->name('sliders.update');
    Route::get('/sliders/destroy/{id}', 'SlidersController@destroy');
    //Route Page Settings Office
    Route::resource('/office', 'OfficeController');
    Route::post('/office/update', 'OfficeController@update')->name('office.update');
    Route::get('/office/destroy/{id}', 'OfficeController@destroy');
    //Route Page Settings Works
    Route::resource('/works', 'WorksController');
    Route::post('/works/update', 'WorksController@update')->name('works.update');
    Route::get('/works/destroy/{id}', 'WorksController@destroy');
    //Route Page Settings Logo
    Route::resource('/logo', 'LogoController');
    Route::post('/logo/update', 'LogoController@update')->name('logo.update');
    Route::get('/logo/destroy/{id}', 'LogoController@destroy');
     //Route Page Settings Platforms
    Route::resource('/platforms', 'PlatformsController');
    Route::post('/platforms/update', 'PlatformsController@update')->name('platforms.update');
    Route::get('/platforms/destroy/{id}', 'PlatformsController@destroy');
    //Route Page Settings team
    Route::resource('/team', 'TeamController');
    Route::post('/team/update', 'TeamController@update')->name('team.update');
    Route::get('/team/destroy/{id}', 'TeamController@destroy');
    //Route Position Available
    Route::resource('/positionavailable', 'PositionAvailableController');
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
    Route::get('/about','FrontendController@about')->name('about');
    Route::get('/services','FrontendController@services')->name('services');
    Route::get('/gallery','FrontendController@gallery')->name('gallery');
    Route::get('/career','FrontendController@career')->name('career');
    Route::get('/blog', 'FrontendController@allblog')->name('all.blog');
    Route::get('/otherservice/{otherservice}', 'FrontendController@detailotherservice')->name('detail.otherservice');
    Route::get('/blog/{article}', 'FrontendController@detailblog')->name('detail.blog');
    Route::get('/blog/category/{cat}', 'FrontendController@blogcat')->name('cat.blog');
    Route::get('/blog/tag/{tag}', 'FrontendController@blogtag')->name('tag.blog');
});


