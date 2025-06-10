<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController; 

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', [RegistrationController::class, 'create']);
Route::post('/register', [RegistrationController::class, 'store']);
Route::get('/thank-you', fn() => view('thank-you'));