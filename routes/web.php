<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dd;

Route::get('/home', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/bag', function () {
    return view('bag');
});
Route::get('/joe', function () {
    return view('joe');
});