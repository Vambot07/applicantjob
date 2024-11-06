<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/job', function () {
    return view('job');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/contact', function() {
    return view('contact');
});