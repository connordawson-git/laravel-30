<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title' => 'director',
                'salary' => '£100,000'
            ],
            [
                'title' => 'programmer',
                'salary' => '£50,000'
            ],
            [
                'title' => 'teacher',
                'salary' => '£30,000'
            ]
        ]
    ]);
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('/contact');
});
