<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vokara</title>
    <!-- Icon Website -->
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="{{ asset('css/Register-talenta.css') }}">
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
                    <h2 class="header-choosing-register text-center my-4">Ayo Segera Daftar!</h2>
                </div>
                <div class="form-choose-section flex-col justify-center">
                    <div class="grid grid-cols-1">
                        <form method="POST">
                            <p class="misc-description">Mari mulai dengan beberapa informasi tentang Anda.</p>
                            <div>
                                <div class="grid grid-cols-2">
                                    <input type="text" class="input-box w-full my-2" placeholder="Nama Depan" required>
                                    <input type="text" class="input-box w-full my-2 ms-1" placeholder="Nama Belakang" required>
                                </div>
                                <input type="text" class="input-box w-full my-2" placeholder="Alamat Email" required>
                                <div class="grid grid-cols-2">
                                    <input type="date" class="input-box w-full my-2" placeholder="Tanggal Lhr." required>
                                    <input type="text" class="input-box w-full my-2 ms-1" placeholder="NISN" required>
                                </div>
                                <div class="password-container">
                                    <input type="password" id="password" class="input-box w-full my-2" placeholder="Kata Sandi" required>
                                    <i class="fa-solid fa-eye" id="eye"></i>
                                </div>
                                <div class="grid grid-cols-2">
                                    <input type="tel" class="input-box w-full my-2" placeholder="No. Hp" required>
                                    <input type="text" class="input-box w-full my-2 ms-1" placeholder="Asal Sekolah" required>
                                </div>
                            </div>
                            <div class="flex justify-between">
                                <div class="flex">
                                    <input type="checkbox">
                                    <p class="misc-description mx-3 my-2">Ingat Saya?</p>
                                </div>
                            </div>
                            <p class="misc-description mt-3">Foto Kartu Pelajar</p>
                            <input type="file" id="kartu-pelajar" class="input-box w-full my-2" placeholder="Kata Sandi" required>
                            <p class="misc-description mt-3">Upload Surat Izin Orang Tua <a href="#" class="sign-in-link">Download Disini</a></p>
                            <input type="file" id="kartu-pelajar" class="input-box w-full my-2" placeholder="Kata Sandi" required>
                            <button type="submit" class="daftar-submit-button w-full my-4">Daftar</button>
                            <p class="misc-description mx-3 my-2 text-center">Sudah Punya Akun?<a href="{{ route('login') }}" class="sign-in-link"> Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/Register-talenta.js') }}"></script>
</body>

</html>