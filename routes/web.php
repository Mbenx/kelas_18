<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestRouteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;



// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [HomeController::class, 'index']);

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan/insert', [KaryawanController::class, 'insert']);

Route::get('/test-route', [TestRouteController::class, 'index']);



// Route::get('/course-net', function () {
//     return view('coursenet');
// });

// Route::get('/cek', function() {
//     return "Hello World";
// });

// Route::get('/hello/{nama}', function($nama) {
//     return "Nama Saya ".$nama;
// });
