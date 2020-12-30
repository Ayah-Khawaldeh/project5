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
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/edit_user_info', function () {
    return view('user.edit_user_info');
});
Route::get('/categories', function () {
    return view('categories');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/index', function () {
    return view('user.index');
});
Route::get('/user_profile', function () {
    return view('user.user_profile');
});
Route::get('/user_public', function () {
    return view('user.user_public');
});
Route::get('/edit', function () {
    return view('user.edit');
});
Route::get('/applied', function () {
    return view('user.applied_job');
});
