<!doctype html>

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
                        <form method="POST">
                            <p class="misc-description">Silahkan Masuk Untuk Melanjutkan.</p>
                            <div>
                                <input type="text" class="input-box w-full my-2" placeholder="Alamat Email">
                                <div class="password-container">
                                    <input type="password" id="password" class="input-box w-full my-2" placeholder="Kata Sandi">
                                    <i class="fa-solid fa-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="checkbox">
                                    <p class="misc-description mx-3">Ingat Saya?</p>
                                </div>
                                <a href="#" class="misc-description">Lupa Kata Sandi?</a>
                            </div>
                            <button type="submit" class="masuk-submit-button w-full my-4">Masuk</button>
                            <div class="flex items-center">
                                <hr class="w-75 opacity-50">
                                <p class="misc-description opacity-50 mx-2">Atau</p>
                                <hr class="w-75 opacity-50">
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