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
    return view('home.index');
});
Route::get('/register/volunteer', function () {
    return view('register.member');
})->name('register.member');
Route::get('/register/participant', function () {
    return view('register.participant');
})->name('register.participant');
