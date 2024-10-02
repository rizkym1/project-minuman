<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\MinumanController; //CTRL+ALT+I

Route::middleware(Authenticate::class)->group(function () {
    Route::resource('minuman', MinumanController::class);
});

Route::get('logout', function () {
    Auth::logout();
    return redirect('login');
});

// Route::get('minuman', [MinumanController::class, 'index']);
Route::get('minuman/create', [MinumanController::class, 'create']);

Route::get('/', function () {
    return view('home.index');
});

Route::get('profil', function () {
    return 'hello world';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
