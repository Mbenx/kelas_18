<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestRouteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/test-route', [TestRouteController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

Route::get('/karyawan', [KaryawanController::class, 'index']);

Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);

Route::get('/karyawan/edit/{id}', [KaryawanController::class, 'edit']);
Route::put('/karyawan/update', [KaryawanController::class, 'update']);

Route::get('/karyawan/delete/{id}', [KaryawanController::class, 'destroy']);

Route::get('/books', [BooksController::class, 'index']);

Route::get('/books/create', [BooksController::class, 'create']);
Route::post('/books/store', [BooksController::class, 'store']);

Route::get('/books/edit/{id}', [BooksController::class, 'edit']);
Route::put('/books/update', [BooksController::class, 'update']);

Route::get('/books/delete/{id}', [BooksController::class, 'destroy']);

Route::get('/department', [DepartmentController::class, 'index']);
Route::get('/department/create', [DepartmentController::class, 'create']);
Route::post('/department/store', [DepartmentController::class, 'store']);
Route::get('/department/edit/{id}', [DepartmentController::class, 'edit']);
Route::put('/department/update', [DepartmentController::class, 'update']);
Route::get('/department/delete/{id}', [DepartmentController::class, 'destroy']);

Route::get('/position', [PositionController::class, 'index']);
Route::get('/position/create', [PositionController::class, 'create']);
Route::post('/position/store', [PositionController::class, 'store']);
Route::get('/position/edit/{id}', [PositionController::class, 'edit']);
Route::put('/position/update', [PositionController::class, 'update']);
Route::get('/position/delete/{id}', [PositionController::class, 'destroy']);






// Route::get('/course-net', function () {
//     return view('coursenet');
// });

// Route::get('/cek', function() {
//     return "Hello World";
// });

// Route::get('/hello/{nama}', function($nama) {
//     return "Nama Saya ".$nama;
// });
