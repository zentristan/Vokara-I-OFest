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
    <link rel="stylesheet" href="{{ asset("css/detail_jasa.css") }}" {{-- Fonts --}} <link rel="preconnect"
        href="https://fonts.googleapis.com">
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
    <div class="container-info-jasa">
        <a href="{{ asset("/PasarJasa") }}"
            class="kembali link-offset-2 link-underline link-underline-opacity-0 text-color-secondary d-flex gap-2">
            <img width="20" height="20" src="{{ asset("images/arrow-left-solid.png") }}">
            <p class="m-0">Kembali ke Temukan Talenta</p>
        </a>
        <div class="d-flex mt-4 justify-content-between ">
            <div class="info d-flex flex-column gap-4">
                <div class="jasa card_color">
                    <h1 class="text-color text-wrap">Nama Jasa Talenta</h1>
                    <div class="d-flex px-4 gap-3">
                        <div class="rating-detail d-flex gap-1">
                            <img width="20" height="20"  src="{{ asset("images/star-solid.png") }}">
                            <p class="fw-bold p-0">5.0</p>
                        </div>
                        <div class="deadline-detail d-flex gap-1">
                            <img width="20" height="20" src="{{ asset("images/clock-regular.png") }}">
                            <p class="text-color">60 Hari pengerjaan</p>
                        </div>
                    </div>
                    <hr class="mt-0">
                    <h2 class="px-4 text-color">Deskripsi Jasa</h2>
                    <p class="px-4 mb-0 text-color">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis deleniti ex unde! Consequuntur
                        quis dolores in! Earum tenetur facere soluta eum perferendis placeat temporibus repellendus ab
                        necessitatibus natus voluptate, exercitationem hic? Nisi ipsa quam, ut alias sequi voluptates
                        atque nam facilis amet obcaecati autem, voluptatibus iusto sunt modi. Debitis, officiis!</p>
                </div>

                <div class="talenta p-4 card_color">
                    <h2 class="text-color mb-2">Tentang Talenta</h2>
                    <div class="d-flex">
                        <img class="rounded-circle" width="60" height="60" src="{{ asset("images/background.png") }}">
                        <div class="ms-2 d-flex flex-column">
                            <p class="text-color fs-5 mb-0">Budiono Siregar Putra Kapal Lawd</p>
                            <p class="text-color-secondary mb-1">Keahlian – Asal Sekolah</p>
                            <button id="button-talenta" class="btn d-flex gap-1 p-1">
                                <img width="20" height="20" src="{{ asset("images/user-regular.png") }}">
                                <p class="text-color m-0">Lihat Profil</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="ulasan py-4 card_color">
                    <h2 class="text-color mb-4 px-4">Ulasan Klien (3)</h2>
                    <div class="ulasan-profil d-flex flex-column">
                        <div class="d-flex gap-2 align-items-center mb-2 px-4">
                            <img class="rounded-circle" width="40" height="40" src="{{ asset("images/background.png") }}">
                            <p class="text-color mb-0">Dimas Hotwil</p>
                            <div class="rating-ulasan d-flex mt-1 ms-2 gap-1">
                                <img width="20" height="20"  src="{{ asset("images/star-solid.png") }}">
                                <p class="fw-bold p-0 m-0">5.0</p>
                            </div>
                        </div>
                        <div class="ulasan-text px-4">
                            <p class="text-color text-wrap">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quaerat facilis modi hic eius ab alias eaque officia quidem deleniti, at eos, voluptas assumenda impedit distinctio. Veritatis hic id fuga.</p>
                        </div>
                        <hr class="mt-0">
                    </div>
                    
                </div>
            </div>
            <div class="button-pesan card_color p-4">
                <h2 class="text-color m-0">Harga mulai dari</h2>
                <p class="accent-color fw-bold fs-1">20.000.000</p>
                <button class="btn text-color fs-5 ">Pesan Sekarang</button>
            </div>
        </div>
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