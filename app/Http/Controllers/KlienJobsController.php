<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\klienJobs;
use Illuminate\Http\Request;

class KlienJobsController extends Controller
{
    public function index()
    {
        $klien = klienJobs::all();
        $kategori = kategori::all(); 
        return view('Lowongan_Jasa.lowonganjasa', compact('klien', 'kategori'));
    }
}
