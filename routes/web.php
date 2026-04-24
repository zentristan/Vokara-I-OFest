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

Route::get('/infojasa', function () {
    return view('Pasar_Jasa.detail_jasa');
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
