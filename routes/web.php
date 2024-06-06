<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('brands', BrandController::class);
    Route::resource('cars', CarController::class);
    Route::resource('comments', CommentController::class);
});

Route::get('/admin', function () {
    return view('adminviews.adminview');
})->name('admin');
