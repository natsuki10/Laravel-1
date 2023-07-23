<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::resource('register', LoginController::class)->only(['create', 'store'])->names([
    'create' => 'register.create',
    'store' => 'register.store',
]);

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/logout',[LogoutController::class, 'logout'])->name('logout');