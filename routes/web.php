<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/store/', function () {
    return view('store.index');
});


Route::get('/admin/register', [AdminController::class, 'create']);
Route::post('/admin/register', [AdminController::class, 'store']);
Route::get('/admin/register', function () {
    return view('admin.register');
});

Route::get('/admin', [SessionController::class, 'create'])->name('admin.login');
Route::post('/admin', [SessionController::class, 'store']);
Route::post('/admin/logout', [SessionController::class, 'destroy']);
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});