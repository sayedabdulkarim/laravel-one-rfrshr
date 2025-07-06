<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

// Route::post('/register', function () {
//     return 'thank you for registering';
// });
Route::post('/register', [UserController::class, 'register']);
