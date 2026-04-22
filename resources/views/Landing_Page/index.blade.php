<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vokara</title>
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
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/ef1f748698.js" crossorigin="anonymous"></script>
    <!-- CONNECTING CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/LandingPage.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">
    <!-- Trig.js CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trig-js/src/trig-animations.min.css">
    </link>
    <!-- Swiper.Js CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <!-- Slick Swiper CDN -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body>
    <nav class="navbar fixed-top" id="mainNavbar">
        <div class="container">
            <div class="nav-content ">
                <div class="nav-logo-wrap pb-2 px-4">
                    <a href="#" class="logo-link">
                        <img src="{{ asset('images/LightLogoFull.png') }}" alt="Vokara Logo" class="logo-image">
                    </a>
                </div>
                <div class="nav-menu d-flex">
                    <a href="/PasarJasa" class="nav-link">Temukan Talenta</a>
                    <a href="/LowonganJasa" class="nav-link">Temukan Proyek</a>
                </div>
                <div class="nav-button d-flex">
                    <a href="#" class="btn-primary">Daftar Gratis</a>
                    <a href="#" class=btn-secondary>Masuk</a>
                </div>
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>
    <div class="main">
        <section class="hero d-flex align-items-center">
            <div class="container">
                <div class="hero-content">
                    <div class="row">
                        <div class="col text-center ">
                            <h1 class="HeroTagline-Text"><span id="typed-text"></span></h1>
                            <p class="HeroDescription-Text">“Platform untuk siswa SMK mengerjakan project real dari klien & membangun portofolio profesional”</p>
                            <div class="d-flex justify-content-center gap-3 mt-4">
                                <a href="/PasarJasa" class="btn-primary fs-5 fw-light ">Temukan Talenta</a>
                                <a href="/LowonganJasa" class="btn-secondary fs-5 fw-light ">Temukan Proyek</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="partnerKami mt-5 mb-5">
            <div class="row mb-2">
                <div class="col">
                    <h4 class="Heading-partner text-center mt-4 mb-4">Perusahaan Yang Telah Bermitra :</h4>
                </div>
            </div>
            <div class="swiper mySwiper1">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide my-1 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/partner-images/BaritoPacific.png') }}" alt="" class="PartnerLogo">
                    </div>
                    <div class="swiper-slide my-1 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/partner-images/BayanRecource.png') }}" alt="" class="PartnerLogo">
                    </div>
                    <div class="swiper-slide my-1 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/partner-images/Djarum.png') }}" alt="" class="PartnerLogo">
                    </div>
                    <div class="swiper-slide my-1 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/partner-images/Indofood.png') }}" alt="" class="PartnerLogo">
                    </div>
                    <div class="swiper-slide my-1 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/partner-images/Mayapada.png') }}" alt="" class="PartnerLogo">
                    </div>
                    <div class="swiper-slide my-1 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/partner-images/AstraPartnet.png') }}" alt="" class="PartnerLogo">
                    </div>
                    <div class="swiper-slide my-1 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/partner-images/Sinarmas.png') }}" alt="" class="PartnerLogo">
                    </div>
                    <div class="swiper-slide my-1 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/partner-images/LippoGroup.png') }}" alt="" class="PartnerLogo">
                    </div>
                </div>
            </div>
        </section>

        <section class="tentang-kami">
            <div class="container">
                <div class="tentang-kami-content mt-5">
                    <div class="row">
                        <div class="col">
                            <div class="trig-fade-left enable-trig">
                                <h1 class="heading-tentang border-start border-3 ps-3 trig-target">Tentang <br> Kami</h1>
                            </div>
                            <div class="d-flex flex-row gap-3 mt-4 trig-fade-up enable-trig">
                                <p class="trig-target tentang-deskripsi">Platform Freelance khusus untuk siswa SMK aktif, menyediakan jasa pekerjaan secara online, Wadah pengembangan keterampilan di mana siswa dapat belajar bekerja nyata dengan berurusan dengan klien nyata, membangun portofolio profesional dan mengasah keterampilan digital sebelum lulus sekolah.</p>
                            </div>
                        </div>
                        <div class="col ms-auto d-flex justify-content-end align-items-center trig-fade-right enable-trig">
                            <img src="{{ asset('images/aboutElement.png') }}" alt="Tentang Kami Logo" class="tentangKami-image trig-target">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="keahlian">
            <div class="container">
                <div class="row smallerBottomSpacing">
                    <div class="col text-center trig-fade-up enable-trig">
                        <h1 class="heading-tentang trig-target mb-6 mt-6">Find Your Passion!</h1>
                    </div>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper pb-5 pt-5 trig-fade-left enable-trig">
                        <div class="swiper-slide">
                            <div class="keahlianCard1" style="--bg: url('{{ asset('images/keahlianCard.png') }}')">
                                <div class="cover-keahlian d-flex justify-content-center align-items-center flex-column">
                                    <h1 class="whiteMain-text fw-bold fs-1">P</h1>
                                    <h1 class="whiteMain-text fw-bold fs-1">O</h1>
                                    <h1 class="whiteMain-text fw-bold fs-1">P</h1>
                                    <h1 class="whiteMain-text fw-bold fs-1">U</h1>
                                    <h1 class="whiteMain-text fw-bold fs-1">L</h1>
                                    <h1 class="whiteMain-text fw-bold fs-1">A</h1>
                                    <h1 class="whiteMain-text fw-bold fs-1">R</h1>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide trig-target">
                            <div class="keahlianCard2" style="--bg: url('{{ asset('images/keahlianCard.png') }}')">
                                <div class="cover-keahlian d-flex justify-content-center align-items-center flex-column">
                                    <i class="fa-solid fa-palette mb-4" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                    <h4 class="CardKonten-heading text-center">Desain Grafis</h4>
                                </div>
                                <div class="konten-keahlian d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-palette mb-5" style="color: rgb(224, 242, 236); font-size: 2rem;"></i>
                                    <p class="text-start border-start border-3 border-white ps-3">Desain grafis adalah seni komunikasi visual yang menggabungkan elemen tipografi, ilustrasi, fotografi, dan warna untuk menyampaikan pesan secara efektif dan estetis.</p>
                                    <h3 class="text-center fw-bold"><span class="text-white">●</span>183 Freelancer</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide trig-target">
                            <div class="keahlianCard3" style="--bg: url('{{ asset('images/keahlianCard.png') }}')">
                                <div class="cover-keahlian d-flex justify-content-center align-items-center flex-column">
                                    <i class="fa-solid fa-code mb-4" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                    <h4 class="CardKonten-heading text-center">Web Dev</h4>
                                </div>
                                <div class="konten-keahlian d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-code mb-5" style="color: rgb(224, 242, 236); font-size: 2rem;"></i>
                                    <p class="text-start border-start border-3 border-white ps-3">Web development adalah proses membangun dan memelihara situs web atau aplikasi berbasis peramban agar dapat berfungsi secara optimal di internet.</p>
                                    <h3 class="text-center fw-bold"><span class="text-white">●</span>241 Freelancer</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide trig-target">
                            <div class="keahlianCard4" style="--bg: url('{{ asset('images/keahlianCard.png') }}')">
                                <div class="cover-keahlian d-flex justify-content-center align-items-center flex-column">
                                    <i class="fa-solid fa-film mb-4" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                    <h4 class="CardKonten-heading text-center">Video Editing</h4>
                                </div>
                                <div class="konten-keahlian d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-film mb-5" style="color: rgb(224, 242, 236); font-size: 2rem;"></i>
                                    <p class="text-start border-start border-3 border-white ps-3">Video editing adalah proses memodifikasi dan mengedit klip video untuk menciptakan karya yang menarik dan bermakna.</p>
                                    <h3 class="text-center fw-bold"><span class="text-white">●</span>134 Freelancer</h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide trig-target">
                            <div class="keahlianCard5" style="--bg: url('{{ asset('images/keahlianCard.png') }}')">
                                <div class="cover-keahlian d-flex justify-content-center align-items-center flex-column">
                                    <i class="fa-solid fa-share-nodes mb-4" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                    <h4 class="CardKonten-heading text-center">Social Manager</h4>
                                </div>
                                <div class="konten-keahlian d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-share-nodes mb-5" style="color: rgb(224, 242, 236); font-size: 2rem;"></i>
                                    <p class="text-start border-start border-3 border-white ps-3">Manajemen media sosial mencakup perencanaan, pembuatan, dan penjadwalan konten untuk platform media sosial guna berinteraksi dengan audiens dan mempromosikan merek.</p>
                                    <h3 class="text-center fw-bold"><span class="text-white">●</span>98 Freelancer</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination text-white"></div>
                </div>
            </div>
        </section>
        <section class="testimonials">
            <div class="container">
                <div class="row d-flex">
                    <div class="col trig-fade-left enable-trig">
                        <h1 class="heading-testimonials trig-target border-start border-white border-3 p-3">Apa Kata Mereka?</h1>
                        <p class="HeroDescription-Text w-50">Ini Yang Mereka Katakan Setelah Menggunakan Layanan Kami</p>
                    </div>
                    <div class="col-lg-7">
                        <div class="swiper mySwiper2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonials-cards" style="background-image: url('{{ asset('images/Testimonials-Card-BG.png') }}')">
                                        <div class="testimonials-content">
                                            <p class="testi-quotes">"Lewat Vokara, aku berhasil dapat project pertama aku di bulan kedua sekolah. Nggak nyangka skill Laravel-ku udah bisa menghasilkan."</p>
                                        </div>
                                        <div class="testimonials-nama d-flex justify-content-start align-items-center gap-2">
                                            <img src="{{ asset('images/testi-avatar/avatar-student1.png') }}" alt="Avatar Testimonial" class="testi-avatar">
                                            <div class="testi-nama-wrap d-flex flex-column justify-content-center align-items-start">
                                                <h3 class="testi-nama-heading">Muhammad Rafie Taufik</h3>
                                                <p class="testi-nama-deskripsi">Siswa SMK Telkom Malang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-cards" style="background-image: url('{{ asset('images/Testimonials-Card-BG.png') }}')">
                                        <div class="testimonials-content">
                                            <p class="testi-quotes">"Awalnya ragu bisa bersaing, tapi ternyata banyak client yang justru nyari anak TKJ buat setup jaringan dan server kecil-kecilan"</p>
                                        </div>
                                        <div class="testimonials-nama d-flex justify-content-start align-items-center gap-2">
                                            <img src="{{ asset('images/testi-avatar/avatar-student2.png') }}" alt="Avatar Testimonial" class="testi-avatar">
                                            <div class="testi-nama-wrap d-flex flex-column justify-content-center align-items-start">
                                                <h3 class="testi-nama-heading">Alfath Fachrizy El Hakim</h3>
                                                <p class="testi-nama-deskripsi">Siswa TKJ SMK Telkom Malang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-cards" style="background-image: url('{{ asset('images/Testimonials-Card-BG.png') }}')">
                                        <div class="testimonials-content">
                                            <p class="testi-quotes">"Vokara bantu aku nemu client yang serius dan nghargain desain. Portfolio-ku sekarang udah isi dari project nyata, bukan cuma tugas sekolah."</p>
                                        </div>
                                        <div class="testimonials-nama d-flex justify-content-start align-items-center gap-2">
                                            <img src="{{ asset('images/testi-avatar/avatar-student3.png') }}" alt="Avatar Testimonial" class="testi-avatar">
                                            <div class="testi-nama-wrap d-flex flex-column justify-content-center align-items-start">
                                                <h3 class="testi-nama-heading">Ghani Nugroho</h3>
                                                <p class="testi-nama-deskripsi">Siswa DKV SMKN 1 Surabaya</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-cards" style="background-image: url('{{ asset('images/Testimonials-Card-BG.png') }}')">
                                        <div class="testimonials-content">
                                            <p class="testi-quotes">"Saya sempat ragu pakai jasa siswa SMK, tapi hasilnya di luar ekspektasi — cepat, rapi, dan harganya sangat terjangkau."</p>
                                        </div>
                                        <div class="testimonials-nama d-flex justify-content-start align-items-center gap-2">
                                            <img src="{{ asset('images/testi-avatar/avatar-client4.png') }}" alt="Avatar Testimonial" class="testi-avatar">
                                            <div class="testi-nama-wrap d-flex flex-column justify-content-center align-items-start">
                                                <h3 class="testi-nama-heading">Budi Siregar</h3>
                                                <p class="testi-nama-deskripsi">Pemilik UMKM Kuliner, Jakarta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-cards" style="background-image: url('{{ asset('images/Testimonials-Card-BG.png') }}')">
                                        <div class="testimonials-content">
                                            <p class="testi-quotes">"Tim kami dapat desainer konten dari Vokara dan langsung cocok. Prosesnya mudah dan komunikasinya profesional."</p>
                                        </div>
                                        <div class="testimonials-nama d-flex justify-content-start align-items-center gap-2">
                                            <img src="{{ asset('images/testi-avatar/avatar-client5.png') }}" alt="Avatar Testimonial" class="testi-avatar">
                                            <div class="testi-nama-wrap d-flex flex-column justify-content-center align-items-start">
                                                <h3 class="testi-nama-heading">Alwi Hasanudin</h3>
                                                <p class="testi-nama-deskripsi">Co-founder Startup Edutech</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonials-cards" style="background-image: url('{{ asset('images/Testimonials-Card-BG.png') }}')">
                                        <div class="testimonials-content">
                                            <p class="testi-quotes">"Butuh website portofolio simpel, ketemu freelancer RPL lewat Semai, selesai dalam 3 hari. Recommended banget!"</p>
                                        </div>
                                        <div class="testimonials-nama d-flex justify-content-start align-items-center gap-2">
                                            <img src="{{ asset('images/testi-avatar/avatar-client5.png') }}" alt="Avatar Testimonial" class="testi-avatar">
                                            <div class="testi-nama-wrap d-flex flex-column justify-content-center align-items-start">
                                                <h3 class="testi-nama-heading">Andi Bumi</h3>
                                                <p class="testi-nama-deskripsi">Mahasiswa, Yogyakarta</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="Mulai-Dari">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="mulai-cards h-100">
                            <div class="heading-mulai d-flex gap-3">
                                <i class="fa-solid fa-user-plus" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                <h1 class="fw-bold">01</h1>
                            </div>
                            <div class="content-mulai">
                                <h3 class="fw-bold cards-heading-mulai my-3">Buat Akun Pertamamu</h3>
                                <p class="opacity-75 fw-normal">Daftarkan dirimu sebagai Talenta, Klien, atau Mentor. Isi profil, jurusan, skill, dan upload portofolio terbaikmu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mulai-cards h-100">
                            <div class="heading-mulai d-flex gap-3">
                                <i class="fa-solid fa-suitcase" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                <h1 class="fw-bold">02</h1>
                            </div>
                            <div class="content-mulai">
                                <h3 class="fw-bold cards-heading-mulai my-3">Tawarkan Jasamu</h3>
                                <p class="opacity-75 fw-normal">Buat listing jasa sesuai keahlianmu. Tetapkan harga, estimasi waktu, dan deskripsi yang menarik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mulai-cards h-100">
                            <div class="heading-mulai d-flex gap-3">
                                <i class="fa-solid fa-star" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                <h1 class="fw-bold">03</h1>
                            </div>
                            <div class="content-mulai">
                                <h3 class="fw-bold cards-heading-mulai my-3">Terima Freelance</h3>
                                <p class="opacity-75 fw-normal">Client UMKM menemukan jasamu dan melakukan order. Kerjakan dengan profesional sesuai deadline.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mulai-cards h-100">
                            <div class="heading-mulai d-flex gap-3">
                                <i class="fa-solid fa-arrow-trend-up" style="color: rgb(224, 242, 236); font-size: 3rem;"></i>
                                <h1 class="fw-bold">04</h1>
                            </div>
                            <div class="content-mulai">
                                <h3 class="fw-bold cards-heading-mulai my-3">Kumpulkan Portofolio</h3>
                                <p class="opacity-75 fw-normal">Kumpulkan lencana, bangun portofolio nyata, dan tingkatkan levelmu dari Beginner hingga Expert.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="call-to-action">
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col d-flex flex-column justify-content-center align-items-center text-center">
                        <img src="{{ asset('images/fav.png') }}" alt="Vokara Logo" class="logo-image-single mx-auto">
                        <div class="call-to-action-card d-flex flex-column justify-content-center align-items-center text-center">
                            <h1 class="heading-call-to-action fw-bold">Siap Untuk Menemukan Potensi Mu?</h1>
                            <p class="call-to-action-description opacity-75">Bergabunglah dengan komunitas kami dan mulai bangun portofolio profesionalmu sekarang!</p>
                            <a href="#" class="btn-primary mt-4">Mulai Bekarya Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="footer-spacer">
    </div>
    <footer class="footer-bg">
        <div class="container-xl">
            <div class="row justify-content-end  py-5">
                <div class="col-auto">
                    <button class="heading-footer-link">Contact Us</button>
                    <ul class="ps-2 ">
                        <li class="footer-link"><a href="#">Youtube</a></li>
                        <li class="footer-link"><a href="#">Instagram</a></li>
                        <li class="footer-link"><a href="#">Twitter</a></li>
                        <li class="footer-link"><a href="#">Facebook</a></li>
                    </ul>
                </div>
                <div class="col-auto">
                    <button class="heading-footer-link">Menu</button>
                    <ul class="ps-2">
                        <li class="footer-link"><a href="#">Home</a></li>
                        <li class="footer-link"><a href="#">Tentang Kami</a></li>
                        <li class="footer-link"><a href="#">Testimoni</a></li>
                        <li class="footer-link"><a href="#">Langkah</a></li>
                    </ul>
                </div>
                <div class="col-auto">
                    <button class="heading-footer-link">Legal</button>
                    <ul class="ps-2">
                        <li class="footer-link"><a href="#">Terms Of Service</a></li>
                        <li class="footer-link"><a href="#">Privacy Policy</a></li>
                        <li class="footer-link"><a href="#">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <hr class="">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center  pb-3">
                    <img src="{{ asset('images/LightLogoFull.png') }}" alt="Vokara Logo" class="logo-image-footer opacity-75">
                    <div class="gradient-overlay"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-end pt-3">
                    <p class="opacity-25 bottom-footer-text">Made With ❤️ From Vokara</p>
                    <p class="opacity-25 bottom-footer-text">&copy; 2026 Vokara. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Swiper.Js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            spaceBetween: 15,
            freeMode: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination1",
                clickable: true,
            },
        });
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 5,
            freeMode: true,
            // autoplay: {
            //   delay: 1900,
            //   disableOnInteraction: false,
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 15,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 5,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 5,
                },
            }
        });
        var swiper = new Swiper(".mySwiper1", {
            slidesPerView: 3,
            spaceBetween: 30,
            freeMode: true,
            autoplay: {
                delay: 1900,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination1",
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 15,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 15,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
            },
        });
    </script>
    <!-- Slick Slider CDN -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Trig.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/trig-js/src/trig.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ asset('js/LandingPage.js') }}"></script>
</body>

</html>