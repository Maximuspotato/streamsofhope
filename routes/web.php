<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CauseController;

use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\CauseController as AdminCauseController;

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

Route::get('/blog-item', function () {
    return view('blog-item'); 
});

Route::get('/contact', function () {
    return view('contact'); 
});

Route::get('/donate', function () {
    return view('donate'); 
});

// Route for the main blog page
Route::get('/blog', [BlogController::class, 'index']);

// Route for the single blog page (the {slug} is dynamic)
Route::get('/blog/{slug}', [BlogController::class, 'show']);

// Route for the main causes page
Route::get('/causes', [CauseController::class, 'index']);

// Route for the single causes page (the {slug} is dynamic)
Route::get('/causes/{slug}', [CauseController::class, 'show']);

Route::prefix('admin')->name('admin.')->middleware('auth.basic')->group(function () {
    
    Route::resource('blogs', AdminBlogController::class);
    Route::resource('causes', AdminCauseController::class);
    
});