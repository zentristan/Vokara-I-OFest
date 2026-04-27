<?php

namespace App\Http\Controllers;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

use App\Models\kategori;
use App\Models\klienJobs;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KlienJobsController extends Controller
{
    public function index()
    {
        $klien = klienJobs::all();
        $kategori = kategori::all();
        return view('Lowongan_Jasa.lowonganjasa', compact('klien', 'kategori'));
    }

    public function create(): View
    {
        return view('Penambahan_Klien.penambahan-talenta');
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul_proyek'   => 'required|min:5',
            'deskripsi'     => 'required|min:10',
            'harga'         => 'required|numeric',
            'id_kategori'      => 'required|in:RPL,DKV',
            'deadline' => 'required|date'
        ]);

        klienJobs::create([
            'judul_proyek'   => $request->judul_proyek,
            'deskripsi'     => $request->deskripsi,
            'harga'         => $request->harga,
            'id_kategori'      => $request->id_kategori,
            'deadline' => $request->deadline,
        ]);
        return redirect('/lowongan')->with('success', 'Proyek berhasil diposting!');
    }
}
