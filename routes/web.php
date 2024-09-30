<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\MinumanController; //CTRL+ALT+I

Route::middleware(Authenticate::class)->group(function () {
    Route::resource('minuman', MinumanController::class);
});



// Route::get('minuman', [MinumanController::class, 'index']);
Route::get('minuman/create', [MinumanController::class, 'create']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('profil', function () {
    return 'hello world';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
