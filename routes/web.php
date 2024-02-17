<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
});


Route::get('/add-karyawan', [KaryawanController::class, 'create']);
Route::post('/add-karyawan1', [KaryawanController::class, 'create1']);
Route::get('/list', [KaryawanController::class, 'view']);
Route::get('/edit/{id}', [KaryawanController::class, 'edit']);