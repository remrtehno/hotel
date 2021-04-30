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

Route::get('/', "MainController@index")->name("index");
Route::get('/catalog', "MainController@catalog")->name("catalog");
Route::get('/products', "MainController@products")->name("products");
Route::get('/category/{slug}', "MainController@category")->name("category");
Route::get('/detail/{slug}', "MainController@detail")->name("detail");
Route::get('/detail/{slug}', "MainController@detail")->name("detail");
Route::get('/product/{name}', "MainController@ProductByName")->name("search");
Route::get('/newsdetail/{slug}', "MainController@newsdetail")->name("newsdetail");
Route::get('/gallery', "MainController@gallery")->name("gallery");
Route::get('/news', "MainController@news")->name("news");
Route::get('/about', "MainController@about")->name("about");
Route::get('/video', "MainController@video")->name("video");
Route::get('/contact', "MainController@contact")->name("contact");
Route::get('/stocks', "MainController@stocks")->name("stocks");
Route::get('/services', "MainController@services")->name("services");
Route::get('/servicesdetail/{id}', "MainController@servicesdetail")->name("servicesdetail");

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'MainController@index');
    Route::resource('/post', 'ProductController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/services', 'ServicesController');
    Route::resource('/about', 'AboutController');
    Route::resource('/news', 'NewsController');
    Route::resource('/video', 'VideoController');
    Route::resource('/contact', 'ContactController');
    Route::resource('/logo', 'LogoController');
    Route::resource('/stock', 'StockController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
