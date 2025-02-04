<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

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

Route::get('/sitemap.xml', function () {
    return Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/tentangDesa'))
        ->add(Url::create('/petaDigital'))
        ->add(Url::create('/produkLokal'))
        ->toResponse(request());
});
