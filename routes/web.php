<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Frontend.home');
});

Route::get('/about', function () {
    return view('Frontend.about');
});
Route::get('/courses', function () {
    return view('Frontend.courses');
});
Route::get('/contact', function () {
    return view('Frontend.contact');
});
Route::get('/blog', function () {
    return view('Frontend.blog');
});
Route::get('/admin', function () {
    return view('admin.admin');
});

