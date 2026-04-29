<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' => ['required', 'confirmed', Rules/Password::defaults()],
            'role' => 'required', 'in:talenta, klien, mentor',
            'nomor_hp' => 'required', 'string', 'max:20',
            'tanggal_lahir' => 'required', 'date',
            'asal_sekolah' => 'required', 'string', 'max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'nomor_hp' => $request-> nomor_hp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'asal_sekolah' => $request->asal_sekolah, 
        ]);

        event(new Registerd($user));
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
        
    }
}
