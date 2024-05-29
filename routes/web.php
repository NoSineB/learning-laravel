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
    Route::get('/jobs/create', 'create')
        ->middleware('auth');
    Route::get('/jobs/{job}', 'show');
    Route::get('/jobs/{job}/edit', 'edit')
        ->middleware('auth')
        ->can('edit', 'job');
    Route::post('/jobs', 'store')
        ->middleware('auth');
    Route::patch('/jobs/{job}', 'update')
        ->middleware('auth')
        ->can('edit', 'job');
    Route::delete('/jobs/{job}', 'destroy')
        ->middleware('auth')
        ->can('edit', 'job');
});

/*
 * ->middleware([Action]) here action is 'auth' so it will check if authenticated. if not redirect them to login page.
 * ->can([policyAction], [Model]) here edit is action on model 'job' from url.
 */

//Job Resource Method ("Very Less to Write, very abstract")
//Route::resource('jobs', JobController::class);

// Registration Routes
Route::controller(UserRegistrationController::class)->group(function () {
    Route::get('/register', 'create');
    Route::post('/register', 'store');
});


// Login Routes
Route::controller(SessionController::class)->group(function () {
    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store');
    Route::post('/logout', 'destroy');
});
