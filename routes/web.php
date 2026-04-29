<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\talentaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/PasarJasa', [talentaController::class, 'index'])->name('PasarJasa.index');

Route::get('/LandingPage', function () {
    return view('Landing_Page/index');
})->name('landingPage');

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
