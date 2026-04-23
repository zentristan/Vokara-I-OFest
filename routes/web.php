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

Route::get('/Lamaran', function () {
    return view('Lamaran_Siswa.lamaran_siswa');
});
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




Route::get('/LowonganJasa', function () {
    return view('Lowongan_Jasa.lowonganjasa');
});

Route::get('/PasarJasa', function () {
    return view('Pasar_Jasa.pasarjasa');
});
// Route::get('/siswa', function () {
//     return view('siswas.index');
// });