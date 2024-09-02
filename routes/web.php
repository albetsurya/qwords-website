<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact',);
});
