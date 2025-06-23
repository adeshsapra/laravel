<?php

use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;


use Illuminate\Support\Facades\Artisan;

Route::get('/migrate', function () {
    Artisan::call('migrate', ['--force' => true]);
    return 'Migration done!';
});

// Dashboard Page
Route::get('/', [UserController::class, 'dashboardPage'])
->name('dashboard');

// Login Routes
Route::get('login', [UserController::class, 'showLoginForm'])
    ->name('login');

Route::post('loginMatch', [UserController::class, 'login'])
    ->name('loginMatch');

// Register Routes
Route::get('register', [UserController::class, 'showRegisterForm'])
    ->name('register');

Route::post('registerSave', [UserController::class, 'register'])
    ->name('registerSave');


Route::get('/logout', function () {
        Auth::logout();
        // session()->invalidate();
        // session()->regenerateToken();
        return redirect()->route('login');
    })->name('logout');


Route::get('send-email',[EmailController::class,'sendEmail']);
Route::post('contact',[EmailController::class,'sendContactEmail'])->name('contact');
