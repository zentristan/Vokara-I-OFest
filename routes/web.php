<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::resource('/siswas', SiswaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/LowonganJasa', function () {
    return view('Lowongan_Jasa.lowonganjasa');
});

Route::get('/PasarJasa', function () {
    return view('Pasar_Jasa.pasarjasa');
});

Route::get('/Dashboard', function () {
    return view('Dashboard_Siswa.dashboard_siswa');
});
Route::get('/LandingPage', function () {
    return view('Landing_Page/index');
});