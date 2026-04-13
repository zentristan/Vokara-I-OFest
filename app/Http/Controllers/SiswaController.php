<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use Illuminate\View\View;

class SiswaController extends Controller
{
    //
    public function index() : View
    {
        //get all siswas
        $siswas = Siswa::latest()->paginate(10);

        //render view with siswas
        return view('siswas.index', compact('siswas'));
    }
}
