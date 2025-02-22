<?php

use App\Models\Store;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserSessionController;

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
Route::patch('/admin/dashboard',[StoreContoller::class, 'edit']);
Route::get('/admin/manage-store', [StoreController::class, 'view']);
Route::get('/admin/show/{id}', function ($id){
    $stores = Store::find($id);
    return view('admin.show', ['stores' => $stores]); 
});
Route::post('/admin/update/{id}', [StoreController::class, 'update']);
Route::delete('/admin/delete/{id}', function ($id){
    Store::findOrFail($id)->delete();
    return redirect('admin/manage-store');
});
});

Route::get('/user/register', [UserController::class, 'create']);
Route::post('/user/register', [UserController::class, 'store']);

Route::get('/user/login', [UserSessionController::class, 'create']);
Route::post('/user/login', [UserSessionController::class, 'store']);

Route::middleware(['auth:web'])-> group(function (){
    Route::get('user/dashboard', function (){
        return view('user.dashboard');
    });
    Route::post('user/logout',[UserSessionController::class, 'destroy']);
    Route::get('/user/buy/{id}', function ($id){
        $stores = Store::find($id);
        return view('user/buy', ['stores' => $stores]); 
    });
});