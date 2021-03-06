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
Route::get('/skill/{slug}', "MainController@skill")->name("skill");
Route::get('/spec/{slug}', "MainController@spec")->name("spec");
Route::get('/detail/{slug}', "MainController@detail")->name("detail");
Route::get('/hotels', "MainController@hotels")->name("hotels");
Route::get('/hotels/{slug}', "MainController@hotel_detail")->name("hotel-detail");
Route::get('/product/{name}', "MainController@ProductByName")->name("search");
Route::get('/barssdetail/{slug}', "MainController@newsdetail")->name("newsdetail");
Route::get('/gallery', "MainController@gallery")->name("gallery");
Route::get('/events', "MainController@events")->name("events");
Route::get('/eventsdetail/{id}', "MainController@servicesdetail")->name("eventsdetail");
Route::get('/bars', "MainController@news")->name("news");
Route::get('/about', "MainController@about")->name("about");
Route::get('/video', "MainController@video")->name("video");
Route::get('/download', "MainController@downloadFiles")->name("download");
Route::get('/contact', "MainController@contact")->name("contact");
Route::get('/stocks', "MainController@stocks")->name("stocks");
Route::get('/services', "MainController@services")->name("services");
Route::get('/extra-services', "MainController@suggestions")->name("extra_services");
Route::get('/extra-services-detail/{id}', "MainController@suggestions_detail")->name("suggestions_detail");
Route::get('/servicesdetail/{id}', "MainController@servicesdetail")->name("servicesdetail");
Route::post('/send-email', "MainController@send_email")->name("email");
Route::get('/thanks', "MainController@thanks");

Route::get('/dopuslugi', "MainController@dopuslugi")->name('dopuslugi');
Route::get('/dopuslugi/{id}', "MainController@dopuslugi_detail")->name('dopuslugi_detail');

Route::get('/rules-of-life', function () {
    return view('rules-of-life.index', ['title' => '???? ??????????', 'meta_key' => '', 'meta_desc' => '']);
});

Route::get('/booking', function () {
    return view('booking.index', ['title' => 'Online ????????????????????????', 'meta_key' => '', 'meta_desc' => '']);
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/', 'MainController@index');
    Route::post('/save-file', 'MainController@save_file')->name('save_file');
    Route::resource('/download-files', 'DownloadedFilesController');
    Route::resource('/post', 'ProductController');
    Route::resource('/dopuslugi', 'DopUslugiController');
    Route::resource('/suggestions', 'SpecSuggestionsController');
    Route::resource('/reviews', 'ReviewsController');
    Route::resource('/hotels', 'HotelsController');
    Route::resource('/skills', 'SkillsController');
    Route::resource('/spec', 'SpecializationsController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/services', 'ServicesController');
    Route::resource('/about', 'AboutController');
    Route::resource('/news', 'NewsController');
    Route::resource('/video', 'VideoController');
    Route::resource('/contact', 'ContactController');
    Route::resource('/logo', 'LogoController');
    Route::resource('/stock', 'StockController');
    Route::get('/extra-services', 'MainController@extra_services')->name('extra-services');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
