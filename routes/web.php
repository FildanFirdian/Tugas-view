<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('awalan ');
});
Route::get('/form', function () {
    return view('form');
});
Route::get('/welcome', function () {
    return view('welcome');
});