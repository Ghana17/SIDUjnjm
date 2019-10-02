<?php

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
    return view('beranda');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/pengaduan', function () {
    return view('pengaduan');
});

Route::get('/cara', function () {
    return view('cara');
});

Route::get('/admin/index', function () {
    return view('admin.index');
});

Route::get('/admin/basic-table', function () {
    return view('admin.basic-table');
});

Route::get('/admin/profile', function () {
    return view('admin.profile');
});

Auth::routes();

Route::get('/profil', 'ProfilController@profil');

Route::post('/update', 'ProfilController@updateProfil');