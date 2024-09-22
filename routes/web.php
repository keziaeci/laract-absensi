<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware('guest')->group(function () {

    Route::controller(AuthController::class)->group(function (){
        Route::get('/login', 'login')->name('login');
    });
    
});
