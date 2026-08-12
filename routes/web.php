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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about'); 
});

Route::get('/causes', function () {
    return view('causes'); 
});

Route::get('/causes-item', function () {
    return view('causes-item'); 
});

Route::get('/gallery', function () {
    return view('gallery'); 
});

Route::get('/blog', function () {
    return view('blog'); 
});

Route::get('/blog-item', function () {
    return view('blog-item'); 
});

Route::get('/contact', function () {
    return view('contact'); 
});

Route::get('/donate', function () {
    return view('donate'); 
});