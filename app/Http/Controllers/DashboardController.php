<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        // $posts = Post::all();


        if (!$user) {
            return redirect()->route('login');
        }

        // if ($user->role === 'klien') {
        //     return view('dashboard_admin', compact('posts'));
        // } elseif ($user->role === 'talent') {
        //     return view('dashboard_talent', compact('posts'));
        // }
        if ($user->role === 'klien') {
            return view('Dashboard_Mentor.dashboard_mentor');
        } elseif ($user->role === 'talent') {
            return view('Dashboard_Siswa.dashboard_siswa');
        }
    }
}
