<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\talentaController;
use App\Http\Controllers\KlienJobsController;


Route::prefix('Dashboard')->group(function () {
});

Route::resource('/siswas', SiswaController::class);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/LowonganJasa', function () {
//     return view('Lowongan_Jasa.lowonganjasa');
// });

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



Route::get('/Register', function () {
    return view('Register_Page/register');
})-> name('register');

Route::get('/Login', function () {
    return view('Register_Page/login');
})-> name('login');

Route::get('/Register-Talenta', function () {
    return view('Register_Page/register-talenta');
})-> name('register.talenta');

Route::get('/Register-Klien', function () {
    return view('Register_Page/register-klien');
}) -> name('register.klien');;

Route::get('/Register-Mentor', function () {
    return view('Register_Page/register-mentor');
})-> name('register.mentor');;




Route::get('/Login', function () {
    return view('Register_Page/login');
})-> name('login');

Route::get('/PenambahanTalenta', function () {
    return view('Penambahan_Klien/penambahan-talenta');
})-> name('login');

Route::get('/PasarJasa', function () {
    return view('Pasar_Jasa.pasarjasa');
});


Route::get('/PasarJasa', [talentaController::class, 'index', 'ambilKategori']);

Route::get('/Lowongan', [KlienJobsController::class, 'index', 'ambilKategori']);

// Route::get('/PasarJasa', [talentaController::class, 'kateg']);
