<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\UserRegistrationController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::view('/contact', 'contact');

//Job Controller Method ("I find this much more flexible")
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit');
    Route::post('/jobs', 'store');
    Route::patch('/jobs/{job}', 'update');
    Route::delete('/jobs/{job}', 'destroy');
});

//Job Resource Method ("Very Less to Write, very abstract")
//Route::resource('jobs', JobController::class);

// Registration Routes
Route::controller(UserRegistrationController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});


// Login Routes
Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create');
    Route::post('/login', 'store');
});
