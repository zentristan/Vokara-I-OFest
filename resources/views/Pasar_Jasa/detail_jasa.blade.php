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
            <div class="info">
                <div class="jasa p-4 card_color">
                    <h1 class="text-color text-wrap">Nama Jasa Talenta</h1>
                    <div class="d-flex">
                        <div class="rating-detail d-flex">
                            <img width="20" height="20"  src="{{ asset("images/star-solid.png") }}">
                            <p>5.0</p>
                        </div>
                        <div class="deadline-detail d-flex">
                            <img>
                            <p>60 Hari pengerjaan</p>
                        </div>
                    </div>
                    <hr>
                    <h2>Deskripsi Jasa</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis deleniti ex unde! Consequuntur
                        quis dolores in! Earum tenetur facere soluta eum perferendis placeat temporibus repellendus ab
                        necessitatibus natus voluptate, exercitationem hic? Nisi ipsa quam, ut alias sequi voluptates
                        atque nam facilis amet obcaecati autem, voluptatibus iusto sunt modi. Debitis, officiis!</p>
                </div>

                <div class="talenta">
                    <h2>Tentang Talenta</h2>
                    <div class="d-flex">
                        <img>
                        <div class="d-flex flex-column">
                            <p>Budiono Siregar Putra Kapal Lawd</p>
                            <p>Keahlian – Asal Sekolah</p>
                            <button class="d-flex">
                                <img>
                                <p>Lihat Profil</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="ulasan">
                    <h2>Ulasan Klien (3)</h2>
                    <div class="ulasan-profil d-flex">
                        <img>
                        <p>Dimas Hotwil</p>
                        <div class="ulasan-rating">
                            <img>
                            <p>5.0</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-pesan">
                <h2>Harga mulai dari</h2>
                <p>200.000</p>
                <button>Pesan Sekarang</button>
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