<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/calendar', function () {
    return view('pages.calendar');
})->name('calendar');

Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');

Route::get('/form-elements', function () {
    return view('pages.form-elements');
})->name('form-elements');

Route::get('basic-tables', function () {
    return view('pages.basic-tables');
})->name('basic-tables');

Route::get('/blank', function () {
    return view('pages.blank');
})->name('blank');

Route::get('/404', function () {
    return view('pages.404');
})->name('404');

Route::get('/line-chart', function () {
    return view('pages.line-chart');
})->name('line-chart');

Route::get('/bar-chart', function () {
    return view('pages.bar-chart');
})->name('bar-chart');

Route::get('alerts', function () {
    return view('pages.alerts');
})->name('alerts');

Route::get('/avatars', function () {
    return view('pages.avatars');
})->name('avatars');

Route::get('/badge', function () {
    return view('pages.badge');
})->name('badge');

Route::get('/buttons', function () {
    return view('pages.buttons');
})->name('buttons');

Route::get('/images', function () {
    return view('pages.images');
})->name('images');

Route::get('/videos', function () {
    return view('pages.videos');
})->name('videos');

Route::get('/signin', function () {
    return view('auth.signin');
})->name('signin');

Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

//now reset-password route to 404 page
//please create a proper reset-password page later
Route::get('/reset-password', function () {
    return view('404');
})->name('reset-password');