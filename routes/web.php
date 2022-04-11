<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return view('inputbuku');
});

Route::post('/input-buku', function () {
    $input = DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
});

Route::get('/peminjaman-buku', function () {
    return view('inputpinjam');
});

Route::post('/pinjam-buku', function () {
});
