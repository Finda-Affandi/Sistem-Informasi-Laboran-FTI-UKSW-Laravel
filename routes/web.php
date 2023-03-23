<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabDetailController;
use App\Http\Controllers\DosenDetailController;
use App\Http\Controllers\KelasDetailController;
use App\Http\Controllers\GedungDetailController;
use App\Http\Controllers\RuangLabController;
use App\Http\Controllers\RuangKelasController;
use App\Http\Controllers\KelengkapanRuangController;
use App\Http\Controllers\SpekKomputerController;
use App\Http\Controllers\SoftwareLabController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\KomputerLabController;
use App\Http\Controllers\LaporanController;

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

// Client area

Route::get('/', function () {
    return view('welcome');
});

Route::get('listRuang', function () {
    return view('/client/listRuang');
});

Route::get('ruangLab', function () {
    return view('/client/lab/ruangLab');
});

Route::get('ruangKelas', function () {
    return view('/client/kelas/ruangKelas');
});

Route::get('ruangDosen', function () {
    return view('/client/dosen/ruangDosen');
});

Route::get('gedungFti', function () {
    return view('/client/gedung/gedungFti');
});

Route::get('laporan', function () {
    return view('/client/laporan/laporan');
});

Route::get('lost&found', function () {
    return view('/client/lostnfound/lostNfound');
});
// Administrator area

Route::get('administrator', function () {
    return view('/admin/administrator');
});

Route::get('adminRuangLab', function () {
    return view('/admin/lab/adminRuangLab');
});

Route::get('adminRuangKelas', function () {
    return view('/admin/kelas/adminRuangKelas');
});

Route::get('adminGedungFti', function () {
    return view('/admin/gedung/adminGedungFti');
});



Route::resource('LabDetail', LabDetailController::class);

Route::resource('DosenDetail', DosenDetailController::class);

Route::resource('KelasDetail', KelasDetailController::class);

Route::resource('GedungDetail', GedungDetailController::class);

Route::resource('RuangLab', RuangLabController::class);

Route::resource('RuangKelas', RuangKelasController::class);

Route::resource('Kelengkapan', KelengkapanRuangController::class);

Route::resource('Spesifikasi', SpekKomputerController::class);

Route::resource('Software', SoftwareLabController::class);

Route::resource('Kalender', KalenderController::class);

Route::resource('Komputer', KomputerLabController::class);

Route::resource('Laporan', LaporanController::class);

