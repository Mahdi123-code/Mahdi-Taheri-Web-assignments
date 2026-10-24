<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('home', [
    'course' => 'Web Information Systems'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'name' => "Mahdi Taheri",
        'id' => 12,
        'desc' => "In this course I want to learn a the backend or server side, which is very intersting thing for me."
    ]);
});