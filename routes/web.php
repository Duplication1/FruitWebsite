<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StoreController;
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



Route::get('/admin/register', [AdminController::class, 'create']);
Route::post('/admin/register', [AdminController::class, 'store']);
Route::get('/admin/register', function () {
    return view('admin.register');
});

Route::get('/admin', [SessionController::class, 'create'])->name('admin.login');
Route::post('/admin', [SessionController::class, 'store']);
Route::post('/admin/logout', [SessionController::class, 'destroy']);

Route::get('/store', [StoreController::class, 'show']);

Route::middleware(['auth:admin'])->group(function(){
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::post('/admin/dashboard', [StoreController::class, 'store']);
});