<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::resource('mahasiswa', MahasiswaController::class);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MahasiswaController::class, 'index']);  // Pastikan controller mengarah ke 'mahasiswa.index'


Route::controller(MahasiswaController::class)->prefix('mahasiswa')->group(function () {
    Route::get('', 'index')->name('mahasiswa');
    Route::get('create', 'create')->name('mahasiswa.create');
    Route::post('store', 'store')->name('mahasiswa.store');
    Route::get('show/{id}', 'show')->name('mahasiswa.show');
    Route::get('edit/{id}', 'edit')->name('mahasiswa.edit');
    Route::put('edit/{id}', 'update')->name('mahasiswa.update');
    Route::delete('destroy/{id}', 'destroy')->name('mahasiswa.destroy');
});

