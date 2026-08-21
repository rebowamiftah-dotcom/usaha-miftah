<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/lokasi', function () {
    return view('lokasi');
});