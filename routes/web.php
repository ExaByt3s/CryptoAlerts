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


Route::view('/', 'welcome');
Route::view('contact', 'contact');
Route::view('about', 'about');
Route::get('activity', 'ActivityController@get_activity');
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function() {
//    return view('about');
//});
//
//Route::get('/contact', function() {
//    return view('contact');
//});


