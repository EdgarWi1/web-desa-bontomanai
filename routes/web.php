<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/produkLokal', function () {
    return view('pages.produkLokal');
})->name('produkLokal');

Route::get('/tentangDesa', function () {
    return view('pages.tentangDesa');
})->name('tentangDesa');

Route::get('/petaDigital', function () {
    return view('pages.petaDigital');
})->name('petaDigital');
