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
    return view('user.trending');
});
Route::get('/templates', function () {
    return view('user.template');
});
Route::get('/create', function () {
    return view('user.create');
});
Route::get('/setting', function () {
    return view('user.setting');
});
Route::get('/contact', function () {
    return view('user.contact');
});
