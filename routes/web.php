<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('FrontPage.welcome');
//});

route::get('/','Front\FrontController@home')->name('home');
route::get('/about','Front\FrontController@about')->name('about');
route::get('/services','Front\FrontController@services')->name('services');
route::get('/cases','Front\FrontController@cases')->name('cases');
route::get('/blog','Front\FrontController@blog')->name('blog');
route::get('/blog-single','Front\FrontController@blog_single')->name('blog-single');
route::get('/contact','Front\FrontController@contact')->name('contact');


