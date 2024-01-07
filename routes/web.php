<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
    return view('index');
});

Route::get('/all-races', function () {
    return view('all-races');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/edit-admin', function () {
    return view('edit-admin');
});

Route::get('/edit-delete-profile', function () {
    return view('edit-delete-profile');
});

Route::get('/edit-password', function () {
    return view('edit-password');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::get('/followers', function () {
    return view('followers');
});

Route::get('/following', function () {
    return view('following');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/reset-password', function () {
    return view('reset-password');
});

Route::get('/upcoming-race', function () {
    return view('upcoming-race');
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// // profiles
// Route::resource('profiles', controller: profileController::class);