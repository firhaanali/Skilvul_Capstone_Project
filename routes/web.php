<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('user/login');
});

Route::get('/register', function () {
    return view('user/register');
});

Route::get('/materi', function () {
    return view('materi');
});

Route::get('/materi_manajemen', function () {
    return view('materi/materi_manajemen');
});

Route::get('/video_manajemen', function () {
    return view('materi/video_manajemen');
});