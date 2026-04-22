<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talenta – Vokara</title>

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">

    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/pasarjasa.css") }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- Outfit Font --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    {{-- Plus Jakarta Sans Font --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
    {{-- Cormorant Garamond Font --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Outfit:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">

    {{-- JS --}}
    <script src="{{ asset("js/navbar.js") }}"></script>

</head>

<x-layout>

    <body>
        <section class="hero-mp">

            <div class="hero-2">
                <div class="hero-top">
                    <h1 class="hero-title">Temukan Talenta</h1>
                </div>
                <h3 class="hero-subtitle">0 Jasa Ditemukan dari Siswa SMK</h3>

                <div class="search-box-mp">
                    <input type="text" placeholder="Cari Jasa, Kategori...">
                    {{-- <button class="search-filter d-flex"><img src="{{ asset(" images/sliders-solid.png") }}"
                            width="25" height="25">
                        <p>Filter</p>
                    </button> --}}
                    <button class="search-button-mp"><img src="{{ asset("images/magnifying-glass-solid.png") }}"
                            width="25" height="25"></button>
                </div>
            </div>

        </section>

        <section class="content-mp">
            <aside class="sidebar-mp">
                <h3>Kategori</h3>
                <ul>
                    <li class="outfit active">Semua</li>
                    <li class="outfit ">Desain Grafis</li>
                    <li class="outfit ">Web Development</li>
                    <li class="outfit ">Video Editing</li>
                    <li class="outfit ">Animasi</li>
                    <li class="outfit ">Fotografi</li>
                </ul>
            </aside>

            <div class="jobs-mp row row-cols-lg-3 gap-3">

                <div class="col card-mp p-0">
                    <img class="card-img-mp" src="{{ asset("images/card_image.jpg") }}">
                    <span class="card-tag-mp outfit"><img class="me-1" width="15" height="15"
                            src="{{ asset("images/tag-solid.png") }}">Kategori</span>
                    <div class="card-bottom-mp d-flex flex-column">
                        <div class="d-flex">
                            <img class="avatar avatar-sm rounded-circle" src="{{ asset("images/background.png") }}">
                            <div class="d-flex flex-column">
                                <p class="card-name-mp outfit text-color mb-0">Nama Siswa</p>
                                <p class="card-subname-mp outfit mb-0">Keahlian – Asal Sekolah</p>
                            </div>
                        </div>
                        <p class="card-bottom-title-mp text-color mt-2">Judul Jasa yang Ditawarkan Pada Card.</p>
                        <div class="card-bottom-info d-flex justify-content-between">
                            <div class="d-flex gap-2 object-fit-contain mt-3">
                                <div class="rating d-flex object-fit-contain">
                                    <img src="{{ asset("images/star-solid.png") }}">
                                    <p class="outfit mb-0">5.0</p>
                                </div>
                                <div class="deadline d-flex object-fit-contain">
                                    <img src="{{ asset("images/clock-regular.png") }}">
                                    <p class="outfit">7 Hari</p>
                                </div>
                            </div>
                            <div class="harga d-flex flex-column mt-2">
                                <p class="harga-title outfit">Mulai dari</p>
                                <p class="harga-angka outfit">Rp 100.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>

</x-layout>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
    crossorigin="anonymous"></script>
</body>

</html>