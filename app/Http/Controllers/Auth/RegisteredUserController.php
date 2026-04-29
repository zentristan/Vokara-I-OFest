<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register-choosing');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'string',
            'max:255',
            'email' => 'required',
            'string',
            'email',
            'max:255',
            'unique:users',
            // 'password' => ['required', 'confirmed', Rules/Password::defaults()],
            'password' => 'required', 'confirmed', Rules\Password::defaults(),
            'role' => 'required',
            'in:talenta, klien, mentor',
            'nomor_hp' => 'required',
            'string',
            'max:20',
            'tanggal_lahir' => 'required',
            'date',
            'asal_sekolah' => 'required',
            'string',
            'max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'nomor_hp' => $request->nomor_hp,
            'tanggal_lahir' => $request->tanggal_lahir,
            'asal_sekolah' => $request->asal_sekolah,
        ]);

        event(new Registered($user));
        Auth::login($user);

        $role = $request->role;

        

        return match($role){
            'klien' => redirect()->route('dashboard.mentor'),
            'talenta' => redirect()->route('dashboard.siswa'),
            'mentor' => redirect()->route('dashboard.mentor')
        };
    }
}
