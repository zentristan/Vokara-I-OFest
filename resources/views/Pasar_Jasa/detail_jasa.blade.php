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
    <script src="{{ asset("js/popup-pesan-jasa.js") }}"></script>

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
                    <h1 class="text-color text-wrap">{{$detailTalenta->namajasa}}</h1>
                    <div class="d-flex px-4 gap-3">
                        <div class="rating-detail d-flex gap-1">


                            <img width="20" height="20"  src="{{ asset("images/star-solid.png") }}">
                            <p class="fw-bold p-0">{{$detailTalenta->rating}}</p>
                        </div>
                        <div class="deadline-detail d-flex gap-1">
                            <img width="20" height="20" src="{{ asset("images/clock-regular.png") }}">
                            <p class="text-color">{{$detailTalenta->deadline}} Hari</p>
                        </div>
                    </div>
                    <hr class="mt-0">
                    <h2 class="px-4 text-color">Deskripsi Jasa</h2>
                    <p class="px-4 mb-0 text-color">{{$detailTalenta->deskripsi}}</p>
                </div>

                <div class="talenta p-4 card_color">
                    <h2 class="text-color mb-2">Tentang Talenta</h2>
                    <div class="d-flex">
                        <img class="rounded-circle" width="60" height="60" src="{{ asset("images/background.png") }}">
                        <div class="ms-2 d-flex flex-column">
                            <p class="text-color fs-5 mb-0">{{$detailTalenta->nama}}</p>
                            <p class="text-color-secondary mb-1">{{$detailTalenta->jurusan}} – {{$detailTalenta->sekolah}}</p>
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
                <p class="accent-color fw-bold fs-1">Rp{{number_format($detailTalenta->harga, 0, ',', '.')}}</p>
                <button onclick="bukaPopup()" class="btn text-color fs-5 outfit">Pesan Sekarang</button>
            </div>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

        <div class="popup flex-column p-4" id="popup">
            <div class="d-flex justify-content-between">
                <h2 class="text-color outfit fs-4">Konfirmasi Pesanan</h2>
                <img class="cursor-pointer" onclick="tutupPopup()" src="{{ asset('images/x-solid.png') }}" width="20" height="20">
            </div>
            <p class="text-color-secondary mb-2 outfit">Isi data di bawah ini untuk melanjutkan pesanan</p>
            <div class="popup-jasa p-3 rounded-2 mb-2">
                <h3 class="outfit text-wrap text-color outfit">{{$detailTalenta->namajasa}}</h3>
                <div class="popup-harga d-flex justify-content-between">
                    <p class="text-color-secondary mb-0 outfit">Harga</p>
                    <p class="accent-color mb-0 fw-bold outfit">Rp{{number_format($detailTalenta->harga, 0, ',', '.')}}</p>
                </div>
            </div>
            {{-- <form action="" method="POST"> --}}
                <div class="popup-nama d-flex flex-column">
                    <label class="text-color-secondary outfit">Nama Anda <b>*</b></label>
                    <input class="text-color" type="text" placeholder="Nama Lengkap" required>
                </div>
                <div class="popup-nomor d-flex flex-column">
                    <label class="text-color-secondary outfit">Nomor telepon <b>*</b></label>
                    <input class="text-color" type="tel" placeholder="08123456789" required minlength="10" maxlength="13">
                </div>
                <div class="popup-email d-flex flex-column">
                    <label class="text-color-secondary outfit">Email <b>*</b></label>
                    <input class="text-color" type="email" placeholder="email@gmail.com" required>
                </div>
                <div class="popup-catatan d-flex flex-column">
                    <label class="text-color-secondary outfit">Catatan (opsional)</label>
                    <textarea class="text-color" id="notes" name="catatan" rows="2" cols="40" placeholder="Jelaskan keterangan secara singkat"></textarea>
                </div>
                <button class="btn text-color fs-5 outfit mt-3" type="submit" onclick="konfirmasiPesanan()">Konfirmasi Pesanan</button>
            {{-- </form> --}}
        </div>

        <div class="popup-sukses flex-column" id="popup-sukses">
            <div class="d-flex flex-column">
                <div class="logo rounded-circle bg_primary justify-content-center align-items-center mx-auto mb-3">
                    <img class="justify-content-center align-items-center" width="80" height="80" src="{{ asset('images/vokaralogo.png') }}">
                </div>
                <h2 class="outfit text-color fw-bold text-center">Pesanan Berhasil!</h2>
                <p class="outfit text-color-secondary text-center text-wrap">Pesanan Anda telah dikirim. Talenta akan segera meninjau brief Anda dan menghubungi melalui WhatsApp.</p>
                <a class="btn text-color fs-5 outfit mt-3 justify-content-center mx-auto" href="/PasarJasa">Kembali</a>
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