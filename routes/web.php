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
Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');

Route::resource('listings', 'ListingController'); // we will kill this most likely


// Handle Reviews
Route::post('/listings/{listing}/review', 'ReviewController@store');

//Search Views
Route::get('/all-states', 'SearchController@index');
Route::get('listings/search/{state}', 'SearchController@stateSearch');
Route::get('listings/search/{state}/{city}', 'SearchController@citySearch');

Route::get('/listings/{statename}/{cityname}/{listing}/{slug}', 'ListingsController@show');


// Create Reports for Inappropriate Comments
Route::get('/report/{review}/create', 'ReportController@create');
Route::post('/report/{review}/store', 'ReportController@store');

// Create Admin Routes
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/listing/{listing}/edit', 'DashboardController@editlisting'); // Edit Users Listing
Route::patch('/dashboard/listing/{listing}', 'DashboardController@updatelisting'); // Update Users Profile
Route::patch('/dashboard/listing/{listing}/hide', 'DashboardController@hidelisting'); // Hide Users Profile
Route::patch('/dashboard/listing/{listing}/show', 'DashboardController@showlisting'); // Unhide Users Profile

// View all Reports
Route::get('/dashboard/report/{report}', 'ReportController@show')->middleware('auth');
Route::get('/dashboard/reports', 'ReportController@index')->middleware('auth');