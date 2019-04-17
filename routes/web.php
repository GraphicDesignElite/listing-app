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
/* Basic Page Routes */


Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');



Route::resource('listings', 'ListingController');
// Handle Reviews
Route::post('/listings/{listing}/review', 'ReviewController@store');

// Create Reports for Inappropriate Comments
Route::get('/report/{review}/create', 'ReportController@create');
Route::post('/report/{review}/store', 'ReportController@store');


// Create Admin Routes
Route::get('/admin/report/{report}', 'ReportController@show');
Route::get('/admin/reports', 'ReportController@index');