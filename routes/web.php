<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::prefix('Dashboard')->group(function () {
});

Route::resource('/siswas', SiswaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/LowonganJasa', function () {
    return view('Lowongan_Jasa.lowonganjasa');
});

Route::get('/LowonganJasaNo', function () {
    return view('Lowongan_Jasa.lowonganjasano');
});

Route::get('/PasarJasa', function () {
    return view('Pasar_Jasa.pasarjasa');
});

Route::get('/Sidebar', function () {
    return view('components.sidebar');
});

Route::get('/Navbarno', function () {
    return view('components.navbar_templateno');
});

Route::get('/Navbar', function () {
    return view('components.navbar_template');
});

Route::get('/Dashboard', function () {
    return view('Dashboard_Siswa.dashboard_siswa');
})->name('Dashboard');

Route::get('/LandingPage', function () {
    return view('Landing_Page/index');
});

Route::get('/Lamaran', function () {
    return view('Lamaran_Siswa.lamaran_siswa');
})->name('Lamaran');

Route::get('/Proyek', function () {
    return view('Proyek_Siswa.proyek_siswa');
})->name('Proyek');

Route::get('/Portofolio', function () {
    return view('Portofolio_Siswa.portofolio_siswa');
})->name('Portofolio');

Route::get('/Lencana', function () {
    return view('Lencana_Siswa.lencana_siswa');
})->name('Lencana');

Route::get('/UbahProfil', function () {
    return view('Ubah_Siswa.ubah_siswa');
})->name('UbahProfil');
