<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vokara</title>
    <!-- Icon Website -->
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="{{ asset('css/RegisterPage.css') }}">
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

<body>
    <section>
        <div class="container">
            <div class="page-choosing-category min-h-48">
                <div class="logo-section">
                    <img src="{{ asset('images/fav.png') }}" alt="Vokara Logo" class="logo-image-single mx-auto">
                </div>
                <div class="heading-section">
                    <h2>Pilih Ingin Mendaftar Menjadi Apa?</h2>
                </div>
                <div class="form-choose-section">
                    <div class="grid grid-cols-2">
                        <div class="talenta-category-card">
                            <i class="fa-solid fa-graduation-cap" style="color: rgb(224, 242, 236);"></i>
                            <h4>Talenta</h4>
                            <p>Daftar Sebagai Siswa Untuk Mengembangkan Portofolio</p>
                        </div>
                        <div class="klien-category-card">
                            <i class="fa-solid fa-briefcase" style="color: rgb(224, 242, 236);"></i>
                            <h4>Klien</h4>
                            <p>Daftar Sebagai Klien Untuk Menawarkan Jasa</p>
                        </div>
                        <div class="mentor-category-card">
                            <i class="fa-solid fa-book-open" style="color: rgb(224, 242, 236);"></i>
                            <h4>Mentor</h4>
                            <p>Daftar Sebagai Mentor Untuk Mendampingi Siswa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('js/LandingPage.js') }}"></script>
</body>

</html>