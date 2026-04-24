<?php

namespace App\Http\Controllers;

// nyari path
use App\Models\talentaJob;

use Illuminate\Http\Request;

class talentaController extends Controller
{
    public function index()
    {
        $talenta = talentaJob::all();
        return view('Pasar_Jasa.pasarjasa', compact('talenta'));
        
    }
}
