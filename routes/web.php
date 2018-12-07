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

Route::group(['prefix' => 'admin','middleware' => ['auth:web', 'checkRole:administrator|journalist']], function () {

    //Dashboard Main Route
    Route::get('/', function() {
        return view('admin.dashboard');
    })->name('dashboard');

    // Routes for reports
    Route::group(['prefix' => 'report'], function() {

        Route::get('/', 'ReportController@index')->name('admin/report/view_all');
        Route::get('/view/{id}', 'ReportController@show')->name('showReport');
    
        Route::get('/add', 'ReportController@create')->name('admin/report/add');
        Route::get('/edit/{id}', 'ReportController@edit')->name('admin/report/edit');

        Route::post('/', 'ReportController@store')->name('adminAddReport');
        Route::post('/update', 'ReportController@update')->name('adminUpdateReport');
        Route::get('/delete/{id}', 'ReportController@destroy')->name('adminDeleteReport');
        
    });

    //Routs for stories
    Route::group(['prefix' => 'story'], function() {
        Route::get('/', function() {
            return view('admin.story.view_all');
        })->name('allStories');

        Route::get('/view/{id}', 'StoryController@show')->name('showStory');
    
        Route::get('/write/{reportId}', 'StoryController@create')->name('writeStory');
        Route::get('/edit/{id}', 'StoryController@edit')->name('editStory');

        Route::post('/', 'StoryController@store')->name('adminAddStory');
        Route::post('/update', 'StoryController@update')->name('adminUpdateStory');
        Route::get('/delete/{id}', 'StoryController@destroy')->name('adminDeleteStory');
    });

    //Routes for Config
});

