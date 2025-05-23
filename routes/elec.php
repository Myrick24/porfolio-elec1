<?php

use App\Http\Controllers\corJunController;
use App\Http\Controllers\corMarcController;
use App\Http\Controllers\gradeJunController;
use App\Http\Controllers\gradeMarcController;

use Illuminate\Support\Facades\Route;




Route::get('/corJun', [corJunController::class, 'index']);
Route::get('/corMarc', [corMarcController::class, 'index']);
Route::get('/education', function () {
    return view('elec1.education');
});

Route::get('/gradeJun', [gradeJunController::class, 'index']);
Route::get('/gradeMarc', [gradeMarcController::class, 'index']);

Route::get('/motto', function () {
    return view('elec1.motto');
});
Route::get('/skills', function () {
    return view('elec1.skills');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('home');
});






?>
