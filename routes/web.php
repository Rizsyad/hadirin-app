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

// Route::get('/', function () {
//     return view('Page.Login');
// });

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
});