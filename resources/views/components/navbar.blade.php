<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pasar Jasa – Pasar jasa</title>

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
    <script src="{{ asset("js/pasarjasa.js") }}"></script>
    </head>
<div>
    <div class="nav-body">
        <header class="navbar d-flex justify-content-between">
            <div class="nav-logo-wrap">
                <img class="nav-logo" src="{{ asset("images/VokaraLight.png") }}">
            </div>
            <nav id="nav-link" class="d-flex">
                <a href="#">Pasar Jasa</a>
                <a href="#">Lowongan Jasa</a>
                <a href="#">Placeholder</a>
            </nav>
            <div class="d-flex gap-2">

                <img class="profile" src="{{ asset("images/user.png") }}" onclick="toggleMenu()">

                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info d-flex">
                            <img class="profile-dropdown" src="{{ asset("images/user.png") }}">
                            <div class="profile-text d-flex flex-column gap-1">
                                <h3 class="username-dropdown">Budiono Siregar</h3>
                                <h5 class="status-akun fw-light">Siswa/Klien/Guru</h5>
                            </div>
                        </div>
                        <hr>
                        <ul class="dropdown-link m-0 p-0">
                            <li>
                                <a href="">Profile</a>
                            </li>
                            <li>
                                <a href="">Ubah Profil</a>
                            </li>
                            <li>
                                <a href="">Lamaranku</a>
                            </li>
                            <li>
                                <a href="">Proyek Aktif</a>
                            </li>
                            <li>
                                <a href="">Lencana</a>
                            </li>
                            <hr>
                            <li class="logout d-flex">
                                <img class="icon-logout" src="{{ asset("images/logout.png") }}"><a href="">Keluar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>