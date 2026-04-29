@php $role = request('role', 'talenta'); @endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vokara</title>
    <!-- Icon Website -->
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="{{ asset('css/Register-klien.css') }}">
    <!-- Jakarta Plus Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <!-- Outfit Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <!-- Cormant Garamound -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <!-- Tailwind CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/ef1f748698.js" crossorigin="anonymous"></script>
</head>

<section>

</section>

<body class="flex justify-center items-center min-h-screen">
    <section class="w-full max-w-lg px-4">
        <div class="container m-auto">
            <div class="page-choosing-category min-h-40 ">
                <div class="logo-section">
                    <img src="{{ asset('images/fav.png') }}" alt="Vokara Logo" class="logo-image-single mx-auto">
                </div>
                <div class="heading-section">
                    <h2 class="header-choosing-register text-center my-4">Yuk, Tawarkan Jasamu!</h2>
                </div>
                <h2 class="header-choosing-register text-center my-1">
                    Daftar Sebagai {{ ucfirst($role) }}
                </h2>
                <div class="form-choose-section flex-col justify-center">
                    <div class="grid grid-cols-1">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="hidden" name="role" value="{{ $role }}">
                            <p class="misc-description">Mari mulai dengan beberapa informasi tentang Anda.</p>
                            <div>
                                <div>
                                    <x-input-label for="name" :value="__('Name')" style="color: rgb(224, 242, 236);"/>
                                    <x-text-input id="name" class="block mt-1 w-full input-box" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('Email')" style="color: rgb(224, 242, 236);"/>
                                    <x-text-input id="email" class="block mt-1 w-full input-box" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="mt-4">
                                    <!-- <label>Tanggal Lahir</label> -->
                                    <x-input-label for="tanggal_lahir" :value="__('Tanggal Lahir')" style="color: rgb(224, 242, 236);"/>
                                    <input type="date" name="tanggal_lahir" class="input-box w-full" value="{{ old('tanggal_lahir') }}" required />
                                    @error('tanggal_lahir') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="mt-4">
                                    <x-input-label for="nomor_hp" :value="__('Nomor HP')" style="color: rgb(224, 242, 236);"/>
                                    <input type="text" name="nomor_hp" class="input-box w-full" value="{{ old('nomor_hp') }}" required />
                                    @error('nomor_hp') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="mt-4">
                                    <x-input-label for="asal_sekolah" :value="__('Asal Sekolah')" style="color: rgb(224, 242, 236);"/>
                                    <input type="text" name="asal_sekolah" class="input-box w-full" value="{{ old('asal_sekolah') }}" required />
                                    @error('asal_sekolah') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="mt-4 password-container">
                                    <x-input-label for="password" :value="__('Password')" style="color: rgb(224, 242, 236);"/>
                                    <input type="password" name="password" class="input-box w-full" required />
                                    <i class="fa-solid fa-eye" id="eye"></i>
                                    @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                                <div class="mt-4">
                                    <label>Konfirmasi Kata Sandi</label>
                                    <input type="password" name="password_confirmation" required />
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="checkbox">
                                    <p class="misc-description mx-3 my-2">Ingat Saya?</p>
                                </div>
                            </div>
                            <button type="submit" class="daftar-submit-button w-full my-4">Daftar</button>
                            <p class="misc-description mx-3 my-2 text-center">Sudah Punya Akun?<a href="{{ route('login') }}" class="sign-in-link"> Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>






<!-- Name -->
<!-- <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div> -->

<!-- Email Address -->
<!-- <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div> -->

<!-- Password -->
<!-- <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full"
            type="password"
            name="password"
            required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div> -->

<!-- Confirm Password -->
<!-- <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full"
            type="password"
            name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div> -->
<!-- <div class="mt-4">
        <x-input-label for="role" :value="__('Role')" />
        <select id="role" name="role" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm">
            <option value="klien">Klien</option>
            <option value="talent">Talent</option>
        </select>
    </div> -->

<!-- <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div> -->