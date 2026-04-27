<?php

namespace App\Http\Controllers;
use App\Models\kategori;

// nyari path
use App\Models\talentaJob;

use Illuminate\Http\Request;

class talentaController extends Controller
{
    public function index()
    {
        $talenta = talentaJob::all();
        $kategori = kategori::all(); 
        return view('Pasar_Jasa.pasarjasa', compact('talenta', 'kategori'));
    }

    public function show($id)
    {
        $detailTalenta = talentaJob::findOrFail($id);
        $kategori = kategori::all();


        return view('Pasar_Jasa.detail_jasa', compact('detailTalenta', 'kategori'));
    }

    public function filterbyKategori($id)
    {
        $talenta = talentaJob::where('id_kategori', $id)->get();
        $kategori = kategori::all();


        return view('Pasar_Jasa.pasarjasa', compact('talenta', 'kategori'));  
    }
}
