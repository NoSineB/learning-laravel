<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Teacher',
            'salary' => '$20,000',
        ],
        [
            'id' => 2,
            'title' => 'Researcher',
            'salary' => '$10,000',
        ],
        [
            'id' => 3,
            'title' => 'Software Engineer',
            'salary' => '$50,000',
        ]
    ];
    return view("jobs", [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Teacher',
            'salary' => '$20,000',
        ],
        [
            'id' => 2,
            'title' => 'Researcher',
            'salary' => '$10,000',
        ],
        [
            'id' => 3,
            'title' => 'Software Engineer',
            'salary' => '$50,000',
        ]
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return view("job", [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view("contact");
});
