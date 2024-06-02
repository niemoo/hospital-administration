<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Daftar Rujukan']);
});

Route::get('/cari-dokter', function () {
    return view('cari-dokter', ['title' => 'Cari Dokter']);
});

Route::get('/ketersediaan-kamar', function () {
    return view('ketersediaan-kamar', ['title' => 'Ketersediaan Kamar']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
