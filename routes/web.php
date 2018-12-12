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

Auth::routes();

Route::get('/', function () {
    return view('pages.home');
})->name('home');

// UI ROUTES 
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/helpyou', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/story', function () {
    return view('story.view');
})->name('story');

Route::get('/stories', function () {
    return view('story.all');
})->name('stories');

Route::group(['prefix' => 'report'], function() {
    Route::get(
        '/', 
        'ReportController@index'
    )->name('reports');

    Route::get(
        '/view/{id}', 
        'ReportController@show'
    )->name('report');

    Route::get(
        '/add', 
        'ReportController@create'
    )->name('addReportForm');

    Route::get(
        '/edit/{id}', 
        'ReportController@edit'
    )->name('updateReportForm');

    Route::post(
        '/', 
        'ReportController@store'
    )->name('addReport');

    Route::post(
        '/update', 
        'ReportController@update'
    )->name('updateReport');

    Route::get(
        '/delete/{id}', 
        'ReportController@destroy'
    )->name('deleteReport');
});

Route::group(['prefix' => 'story'], function() {
    Route::get(
        '/', 
        'StoryController@index'
    )->name('stories');

    Route::get(
        '/view/{id}', 
        'StoryController@show'
    )->name('story');
});

Route::group(['prefix' => 'admin','middleware' => ['auth:web', 'checkRole:administrator|journalist']], function () {

    //Dashboard Main Route
    Route::get('/', function() {
        return view('admin.dashboard');
    })->name('dashboard');

    // Routes for reports
    Route::group(['prefix' => 'report'], function() {
        Route::get(
            '/', 
            'ReportController@index'
        )->name('admin/report/view_all');

        Route::get(
            '/view/{id}', 
            'ReportController@show'
        )->name('showReport');
    
        Route::get(
            '/add', 
            'ReportController@create'
        )->name('admin/report/add');

        Route::get(
            '/edit/{id}', 
            'ReportController@edit'
        )->name('admin/report/edit');

        Route::post(
            '/', 
            'ReportController@store'
        )->name('adminAddReport');

        Route::post(
            '/update', 
            'ReportController@update'
        )->name('adminUpdateReport');

        Route::get(
            '/delete/{id}', 
            'ReportController@destroy'
        )->name('adminDeleteReport');

        Route::get(
            '/verify/{id}', 
            'ReportController@verify'
        )->name('adminVerifyReport');
    });

    // Routes for evidence
    Route::group(['prefix' => 'evidence'], function() {
        //Route::get('/report/{id}', 'EvidenceController@index')->name('reportEvidence');
        Route::get(
            '/add/report/{id}', 
            'EvidenceController@create'
        )->name('addEvidence');

        Route::post(
            '/', 
            'EvidenceController@store'
        )->name('adminAddEvidence');

        Route::get(
            '/delete/{id}', 
            'EvidenceController@destroy'
        )->name('adminDeleteEvidence');
    });
    
    //Routes for stories
    Route::group(['prefix' => 'story'], function() {
        Route::get(
            '/', 
            'StoryController@index'
        )->name('allStories');

        Route::get(
            '/view/{id}', 
            'StoryController@show'
        )->name('showStory');
    
        Route::get(
            '/write/{reportId}', 
            'StoryController@create'
        )->name('writeStory');

        Route::get(
            '/edit/{id}', 
            'StoryController@edit'
        )->name('editStory');

        Route::get(
            '/updateThumbnail/{id}', 
            'StoryController@showUpdateThumbForm'
        )->name('updateThumbnail');

        Route::post(
            '/', 
            'StoryController@store'
        )->name('adminAddStory');

        Route::post(
            '/update', 
            'StoryController@update'
        )->name('adminUpdateStory');

        Route::post(
            '/updateThumbnail', 
            'StoryController@updateThumbnail'
        )->name('adminUpdateStoryThumb');

        Route::get(
            '/delete/{id}', 
            'StoryController@destroy'
        )->name('adminDeleteStory');

        Route::get(
            '/approve/{id}', 
            'StoryController@approve'
        )->name('adminApproveStory');
    });

    //Routes for user
    Route::group(['prefix' => 'user'], function() {
        Route::get(
            '/', 
            'UserController@index'
        )->name('users');

        Route::get(
            '/profile/{id}', 
            'UserController@show'
        )->name('showUser');

        Route::post(
            '/changePassword', 
            'UserController@changePassword'
        )->name('changePassword');
    });
}); 