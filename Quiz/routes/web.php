<?php

use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/courses','courses.index');

Route::resource('/lecturers',LecturerController::class);
