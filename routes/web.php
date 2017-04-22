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
})->name('home.index');
Route::get('/register/volunteer', function () {
    return view('register.member');
})->name('register.member');
    Route::get('/register/participant', function () {
    return view('register.participant');
})->name('register.participant');

Route::get('/register/event', function () {
    return view('register.event');
})->name('register.event');

Route::get('/register/workshop', function () {
    return view('register.workshop');
})->name('register.workshop');

Route::get('/events', function () {
    return view('events.index');
})->name('events.index');
Route::get('/about', function () {
    return view('home.about');
})->name('about');
Route::get('/contact', function () {
    return view('home.contact');
})->name('contact');
Route::get('/board', function () {
    return view('home.board');
})->name('board');
Route::get('/halloffame', function () {
    return view('home.halloffame');
})->name('halloffame');

Route::get('/workshops', function () {
    return view('workshops.index');
})->name('workshops.index');
Route::get('/workshops/{id}', function () {
    return view('workshops.workshopviewer');
})->name('workshops.workshopviewer');
Route::get('/events/{id}', function () {
    return view('events.eventviewer');
})->name('events.eventviewer.index');
