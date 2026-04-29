<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\talentaController;
use App\Http\Controllers\KlienJobsController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

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

Route::get('/Dashboard_Klien', function () {
    return view('Dashboard_Klien.dashboard_klien');
})->name('Dashboard_Klien');

Route::get('/Daftar_Siswa', function () {
    return view('Daftar_Siswa.daftar_siswa');
})->name('Siswa');

Route::get('/Daftar_Klien', function () {
    return view('Daftar_Klien.daftar_klien');
})->name('Klien');

Route::get('/UbahSiswa', function () {
    return view('Ubah_Siswa.ubah_siswa');
})->name('UbahSiswa');

Route::get('/UbahGuru', function () {
    return view('Ubah_Guru.ubah_guru');
})->name('UbahGuru');

Route::get('/UbahKlien', function () {
    return view('Ubah_Klien.ubah_klien');
})->name('UbahKlien');

Route::get('/Landing_Page', function () {
    return view('Landing_Page/index');
});

Route::get('/PasarJasa', [talentaController::class, 'index'])->name('PasarJasa.index');

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

Route::get('/Orderan', function () {
    return view('Orderan_Siswa.orderan_siswa');
})->name('Orderan');

Route::get('/Jasa', function () {
    return view('JasaTalenta_Klien.jasatalenta_klien');
})->name('Jasa');

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

Route::get('/PenambahanKlien', function () {
    return view('Penambahan_Klien/penambahan_klien');
})-> name('login');

Route::get('/PenambahanTalenta', function () {
    return view('Penambahan_Talenta/penambahan_talenta');
})-> name('login');

Route::get('/PasarJasa', function () {
    return view('Pasar_Jasa.pasarjasa');
});


Route::get('/PasarJasa', [talentaController::class, 'index'])->name('PasarJasa.index');

Route::get('/PasarJasa/kategori/{id}', [talentaController::class, 'filterbyKategori'])->name('filterKategori');

Route::get('/Lowongan/kategori/{id}', [KlienJobsController::class, 'filterbyKategori'])->name('filterKategoriProyek');

Route::get('/PasarJasa/{id}', [talentaController::class, 'show'])->name('PasarJasa.show');

Route::get('/Lowongan', [KlienJobsController::class, 'index',])->name('Lowongan.index');

Route::get('/LowonganJasa/{id}', [KlienJobsController::class, 'show'])->name('LowonganJasa.show');

Route::get('/TambahLowongan', [KlienJobsController::class, 'create',])->name('Lowongan.create');

Route::post('/TambahLowongan', [KlienJobsController::class, 'store',])->name('Lowongan.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/PasarJasa/{id}', [talentaController::class, 'show'])->name('PasarJasa.show');
    
    

});


require __DIR__.'/auth.php';
