<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\FrontendController;

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
//frontend routes
Route::get('/', [FrontendController::class, 'index']);



Route::get('/contact', [FrontendController::class, 'contact']);
Route::post('/contact/contact_massage', [FrontendController::class, 'contact_massage'])->name('contact.contact_massage');

Route::get('/about', function () {
    return view('Frontend.about');
});
Route::get('/courses', function () {
    return view('Frontend.courses');
});

Route::get('/blog', function () {
    return view('Frontend.blog');
});
Route::get('/login', function () {
    return view('Frontend.login');
});


Route::get('/registration', function () {
    return view('Frontend.registration');
});

Route::get('/regsuccess', function () {
    return view('Frontend.regsuccess');
});
// Route::get('/admin_contact', function () {
//     return view('admin.contact');
// });



//Admin 
Route::get('/admin', [HomeController::class, 'index']);
Route::prefix('admin')->group(function () {
    Route::resource('/contact', AdminContactController::class);
    Route::resource('/my-profile', AdminProfileController::class);
});
