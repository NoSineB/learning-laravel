<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(6);
    return view("jobs/index", [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view("jobs/create");
});

Route::get('/jobs/{id}', function ($id) {
    return view("jobs/show", [
        'job' => Job::find($id)
    ]);
});

Route::get('/jobs/{id}/edit', function ($id) {
    return view("jobs/edit", [
        'job' => Job::find($id)
    ]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => '2',
    ]);

    return redirect('/jobs');
});

Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job = Job::find($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect("/jobs/{$job->id}");
});

Route::delete('/jobs/{id}', function ($id) {
    Job::find($id)->delete();
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view("contact");
});
