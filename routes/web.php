<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;

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

Route::controller(AuthController::class)->name('auth')->group(function () {
    Route::get('/', 'login')->name('login');
});

Route::controller(ViewController::class)->prefix('views')->name('views.')->group(function () {
    Route::get('home', 'home')->name('home');
    Route::get('presensi', 'presensi')->name('presensi');
    Route::get('profile', 'profile')->name('profile');
    Route::get('absen-masuk', 'absenmasuk')->name('absenmasuk');
    Route::get('absen-pulang', 'absenpulang')->name('absenpulang');
    Route::get('surat-izin', 'suratizin')->name('suratizin');
    Route::get('pengajuan-cuti', 'pengajuancuti')->name('pengajuancuti');
    Route::get('cek-status', 'cekstatus')->name('cekstatus');
});

Route::resource('user', App\Http\Controllers\UserController::class);
Route::resource('absen', App\Http\Controllers\AbsenController::class)->only('index');
Route::resource('suratizin', App\Http\Controllers\SuratizinController::class)->only('index', 'show', 'update');
Route::resource('suratcuti', App\Http\Controllers\SuratcutiController::class)->only('index', 'show', 'update');


Route::resource('user', App\Http\Controllers\UserController::class);

Route::resource('absen', App\Http\Controllers\AbsenController::class)->only('index');

Route::resource('suratizin', App\Http\Controllers\SuratizinController::class)->only('index', 'show', 'update');

Route::resource('suratcuti', App\Http\Controllers\SuratcutiController::class)->only('index', 'show', 'update');


Route::resource('user', App\Http\Controllers\UserController::class);

Route::resource('absen', App\Http\Controllers\AbsenController::class)->only('index');

Route::resource('suratizin', App\Http\Controllers\SuratizinController::class)->only('index', 'show', 'update');

Route::resource('suratcuti', App\Http\Controllers\SuratcutiController::class)->only('index', 'show', 'update');

Route::resource('setting', App\Http\Controllers\SettingController::class)->only('index', 'update');
