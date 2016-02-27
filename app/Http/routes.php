<?php
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'WelcomeController@index');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::post('/guestcase', 'GuestCaseController@store');
});

// Admin area
Route::get('admin', function () {
    return redirect('/admin/law_case');
});

// Route::group可以写成$router->group
Route::group(['namespace' => 'Admin', 'middleware' => ['web', 'auth']], function () {
    Route::resource('admin/law_case', 'LawCaseController');
    Route::resource('admin/lawyer', 'LawyerController');
    Route::resource('admin/law_office', 'LawOfficeController');
    Route::resource('admin/successful_case', 'SuccessfulCaseController');
    Route::resource('admin/about', 'AboutController');
});