<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if (!$user) {
            return redirect()->route('login');
        }

        return match($user->role){
            'talenta' => redirect()->route('dashboard.siswa'),
            'mentor' => redirect()->route('dashboard.mentor'),
            'klien' => redirect()->route('dashboard.klien'),
            default => abort(403)
        };
        // if ($user->role === 'mentor') {
        //     return view('Dashboard_Mentor.dashboard_mentor');
        // } elseif ($user->role === 'talenta') {
        //     return view('Dashboard_Siswa.dashboard_siswa');
        // } elseif ($user->role === 'klien'){
        //     return view('Dashboard_Klien.dashboard_klien');
        // }
    }
    public function talenta()
    {
        return view('Dashboard_Siswa.dashboard_siswa');
    }
    public function mentor()
    {
        return view('Dashboard_Mentor.dashboard_mentor');
    }
    public function klien()
    {
        return view('Dashboard_Klien.dashboard_klien');
    }
}
