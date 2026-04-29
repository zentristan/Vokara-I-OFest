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
        $klien = klienJobs::join('kategoris', 'klien_jobs.id_kategori', '=', 'kategoris.id')
        ->select('klien_jobs.*', 'klien_jobs.id as id', 'kategoris.namaKategori')
        ->get();

        $kategori = kategori::all();
        return view('Lowongan_Jasa.lowonganjasa', compact('klien', 'kategori'));
    }

    public function create(): View
    {
        return view('Penambahan_Klien.penambahan-klien');
    }


        public function show($id)
    {
        $detailLowongan = klienJobs::findOrFail($id);
        $kategori = kategori::all();


        return view('Lowongan_jasa.detail_lowongan', compact('detailLowongan', 'kategori'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'judul_proyek'   => 'required|min:5',
            'deskripsi'     => 'required|min:10',
            'harga'         => 'required|numeric',
            // 'id_kategori'      => 'required|in:RPL,DKV',
            'deadline' => 'required|numeric|min:1'
        ]);

        klienJobs::create([
            'judul_proyek'   => $request->judul_proyek,
            'deskripsi'     => $request->deskripsi,
            'harga'         => $request->harga,
            // 'id_kategori'      => $request->id_kategori,
            'deadline' => $request->deadline,
        ]);
        return redirect('/Lowongan')->with('success', 'Proyek berhasil diposting!');
    }

        public function filterbyKategori($id)
    {
        // $talenta = talentaJob::where('id_kategori', $id)->get();
        $kategori = kategori::all();
       
        $klien = klienJobs::join('kategoris', 'klien_jobs.id_kategori', '=', 'kategoris.id')
        ->where('klien_jobs.id_kategori', $id)
        ->select('klien_jobs.*', 'kategoris.namaKategori')
        ->get();

        return view('Lowongan_Jasa.lowonganjasa', compact('klien', 'kategori'));  
    }
}
