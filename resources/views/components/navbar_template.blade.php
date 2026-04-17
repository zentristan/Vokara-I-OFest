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