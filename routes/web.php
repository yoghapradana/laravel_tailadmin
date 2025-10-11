<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/form-elements', function () {
    return view('form-elements');
})->name('form-elements');

Route::get('basic-tables', function () {
    return view('basic-tables');
})->name('basic-tables');

Route::get('/blank', function () {
    return view('blank');
})->name('blank');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/line-chart', function () {
    return view('line-chart');
})->name('line-chart');

Route::get('/bar-chart', function () {
    return view('bar-chart');
})->name('bar-chart');

Route::get('alerts', function () {
    return view('alerts');
})->name('alerts');

Route::get('/avatars', function () {
    return view('avatars');
})->name('avatars');

Route::get('/badge', function () {
    return view('badge');
})->name('badge');

Route::get('/buttons', function () {
    return view('buttons');
})->name('buttons');

Route::get('/images', function () {
    return view('images');
})->name('images');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');

Route::get('/signin', function () {
    return view('signin');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');