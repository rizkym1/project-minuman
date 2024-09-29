<?php

use App\Http\Controllers\MinumanController;
use Illuminate\Support\Facades\Route;


Route::resource('minuman', MinumanController::class);

// Route::get('minuman', [MinumanController::class, 'index']);
Route::get('minuman/create', [MinumanController::class, 'create']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('profil', function () {
    return 'hello world';
});
