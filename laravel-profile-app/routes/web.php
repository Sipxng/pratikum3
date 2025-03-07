<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::post('/submit-profile', [ProfileController::class, 'submit']);

Route::view('/profile', 'profile');

Route::get('/', function () {
    return view('welcome');
});
