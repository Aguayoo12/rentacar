<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CommentController;
use App\Models\Car;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard')->with('cars', Car::limit(4)->get())->with('comments', Comment::limit(3)->orderBy('rating', 'desc')->get());
})->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('brands', BrandController::class);
    Route::resource('cars', CarController::class);
    Route::resource('comments', CommentController::class);
    Route::get('/reservas', function () {
        return view('cars.reservas');
    })->name('reservas');
    Route::get('/adminreservas', function () {
        return view('adminviews.adminreservas');
    })->name('adminreservas');
});

Route::get('/admin', function () {
    return view('adminviews.adminview');
})->name('admin');
