<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\talentaController;
use App\Http\Controllers\KlienJobsController;


Route::prefix('Dashboard')->group(function () {
});

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

Route::get('/Sidebar_Mentor', function () {
    return view('components.sidebar_mentor');
});

Route::get('/Navbarno', function () {
    return view('components.navbar_templateno');
});

Route::get('/Navbar', function () {
    return view('components.navbar_template');
});

Route::get('/Dashboard_Mentor', function () {
    return view('Dashboard_Mentor.dashboard_mentor');
})->name('Dashboard_Mentor');

Route::get('/Daftar_Siswa', function () {
    return view('Daftar_Siswa.daftar_siswa');
})->name('Siswa');

Route::get('/UbahGuru', function () {
    return view('Ubah_Guru.ubah_guru');
})->name('UbahGuru');

Route::get('/Landing_Page', function () {
    return view('Landing_Page/index');
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

Route::get('/Orderan', function () {
    return view('Orderan_Siswa.orderan_siswa');
})->name('Orderan');

Route::get('/Keterangan', function () {
    return view('Keterangan_siswa.keterangan_siswa');
});

Route::get('/Keterangan-Diterima', function () {
    return view('Keterangan_siswa.keterangan_siswa_diterima');
});

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


Route::get('/PasarJasa', [talentaController::class, 'index'])->name('PasarJasa.index');

Route::get('/PasarJasa/kategori/{id}', [talentaController::class, 'filterbyKategori'])->name('filterKategori');

Route::get('/PasarJasa/{id}', [talentaController::class, 'show'])->name('PasarJasa.show');

Route::get('/Lowongan', [KlienJobsController::class, 'index',])->name('Lowongan.index');

Route::get('/TambahLowongan', [KlienJobsController::class, 'create',])->name('Lowongan.create');

Route::post('/TambahLowongan', [KlienJobsController::class, 'store',])->name('Lowongan.store');



// Route::get('/PasarJasa', [talentaController::class, 'kateg']);
