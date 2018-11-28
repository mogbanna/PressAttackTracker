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
    return view('home');
})->name('home');

Auth::routes();



// UI ROUTES 
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/helpyou', function () {
    return view('faq');
})->name('faq');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/posts', function () {
    return view('posts');
})->name('posts');

Route::get('/reports', function () {
    return view('reports');
})->name('reports');

Route::get('/report', function () {
    return view('report');
})->name('report');

Route::get('/submit_report', function() {
    return view('submit_report');
})->name('submit_report');



Route::group(['prefix' => 'admin','middleware' => ['auth:web', 'App\Http\AdminMiddleware', 'App\Http\JournalistMiddleware', 'App\Http\ReporterMiddleware']], function () {

    //Dashboard Main Route
    Route::get('/', function() {
        return view('admin.dashboard');
    })->name('dashboard');

    // Routes for reports
    Route::group(['prefix' => 'report'], function() {

        Route::get('/', function() {
            return view('admin.report.view_all');
        })->name('admin/report/view_all');
    
        Route::get('/add', function() {
            return view('admin.report.add');
        })->name('admin/report/add');


    });

    //Routs for posts
    Route::group(['prefix' => 'post'], function() {

        Route::get('/', function() {
            return view('admin.post.view_all');
        })->name('admin/post/view_all');
    
        Route::get('/add', function() {
            return view('admin.post.add');
        })->name('admin/post/add');


    });



    //Routes for Config





});



// ADMIN ROUTES

