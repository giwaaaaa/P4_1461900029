<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KamarJoinController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ExportController;
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
    return view('welcome');
});

//route get harus diatas, agar bisa terbaca ketika akses resource di web
Route::get('/pasien/pdf', [PasienController::class,'generate']);

Route::get('/dokter/pdf', [DokterController::class,'generate']);

Route::get('/kamarjoin/pdf', [KamarJoinController::class,'generate']);

Route::get('/kamar/pdf', [KamarController::class,'generate']);

Route::resource('pasien0029', PasienController::class);

Route::resource('dokter0029', DokterController::class);

Route::resource('kamarjoin0029', KamarJoinController::class);

Route::resource('kamar0029', KamarController::class);

Route::get('importdokter0029', [DokterController::class, 'formimport']);

Route::post("dokter-import", [DokterController::class, 'import'])->name("dokter.import");

Route::get('importpasien0029', [PasienController::class, 'formimport']);

Route::post("pasien-import", [PasienController::class, 'import'])->name("pasien.import");

