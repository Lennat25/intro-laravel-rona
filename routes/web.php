<?php

use Illuminate\Support\Facades\Route;

Route::get('/register',[AuthController::class,"register"]);
Route::get('/welcome',[AuthController::class,"welcome"]);

Route::get('/datatable', function(){
    return view('datatable');
});
Route::get('/table', function(){
    return view('table');
});

Route::get('/', function () {
    return view('home');
});
