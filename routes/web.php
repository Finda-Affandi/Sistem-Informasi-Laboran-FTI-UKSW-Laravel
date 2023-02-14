<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabDetailController;
use App\Http\Controllers\DosenDetailController;
use App\Http\Controllers\KelasDetailController;
use App\Http\Controllers\GedungDetailController;
use App\Http\Controllers\RuangLabController;
use App\Http\Controllers\KelengkapanRuangController;

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

Route::get('cb', function () {
    return view('cb');
});



Route::resource('LabDetail', LabDetailController::class);

Route::resource('DosenDetail', DosenDetailController::class);

Route::resource('KelasDetail', KelasDetailController::class);

Route::resource('GedungDetail', GedungDetailController::class);

Route::resource('RuangLab', RuangLabController::class);

Route::resource('Kelengkapan', KelengkapanRuangController::class);
