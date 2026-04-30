<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vokara</title>
    <!-- Icon Website -->
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="{{ asset('css/LoginPage.css') }}">
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
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="w-full max-w-lg px-4">
        <div class="container m-auto">
            <div class="page-choosing-category min-h-40 ">
                <div class="logo-section">
                    <img src="{{ asset('images/fav.png') }}" alt="Vokara Logo" class="logo-image-single mx-auto">
                </div>
                <div class="heading-section">
                    <h2 class="header-choosing-register text-center my-4">Selamat Datang Kembali</h2>
                </div>
                <div class="form-choose-section flex-col justify-center">
                    <div class="grid grid-cols-1">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p class="misc-description">Silahkan Masuk Untuk Melanjutkan.</p>
                            <div class="my-3">
                                <x-input-label for="email" :value="__('Email')" class="misc-description"/>
                                <x-text-input id="email" class="block mt-1 w-full input-box" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="password-container my-3">
                                <x-input-label for="password" :value="__('Password')" class="misc-description"/>
                                <x-text-input id="password" class="block mt-1 w-full input-box"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <i class="fa-solid fa-eye" id="eye"></i>
                            </div>

                            <div class="flex justify-between">
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                        <span class="ms-2 text-sm text-gray-600 misc-description">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                            </div>
                            <div class=" items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                <a class="underline misc-description text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Lupa Kata Sandi?') }}
                                </a>
                                @endif

                                <x-primary-button class="ms-3 masuk-submit-button w-full flex justify-center my-3">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                            <button class="other-way-login-button w-full my-2 flex justify-center items-center"><i class="fa-brands fa-google mx-2" style="color: rgb(224, 242, 236); font-size: 1.5rem;"></i>Masuk Dengan Google</button>
                            <button class="other-way-login-button w-full my-2 flex justify-center items-center"><i class="fa-solid fa-phone mx-2" style="color: rgb(224, 242, 236); font-size: 1.5rem;"></i>Masuk Dengan No. Telp</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/LoginPage.js') }}"></script>
</body>

</html>


<!-- Session Status -->
<!-- <x-auth-session-status class="mb-4" :status="session('status')" /> -->

<!-- <form method="POST" action="{{ route('login') }}"> -->
<!-- @csrf -->

<!-- Email Address -->
<!-- <div>
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div> -->

<!-- Password -->
<!-- <div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />
    <x-text-input id="password" class="block mt-1 w-full"
        type="password"
        name="password"
        required autocomplete="current-password" />
    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div> -->

<!-- Remember Me -->
<!-- <div class="block mt-4">
    <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
    </label>
</div> -->

<!-- <div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
    </a>
    @endif

    <x-primary-button class="ms-3">
        {{ __('Log in') }}
    </x-primary-button>
</div> -->
<!-- </form> -->