@php
    $route = request()->route()->getName();
@endphp

<section class="sidebar">
    <div class="sidebar-header">
        <img src="{{ asset('images/VokaraLight.png') }}" alt="Logo Vokara" width="110" height="50">
    </div>

    <div class="sidebar-content">
        <div class="profil-row">
            <div class="card-profil">
                <p>Foto</p>
            </div>
            <div class="profil-info">
                <h2>{{ Auth::user()->name }}</h2>
                <p>SMK Informatika Pesat</p>
            </div>
        </div>
        <div class="badges">
            <div class="card-profil1"></div>
            <div class="card-profil1"></div>
            <div class="card-profil1"></div>
            <div class="card-profil1"></div>
            <p>+9 Lencana</p>
        </div>
    </div>

    <div class="sidebar-nav">
        <ul>
            <a href="{{ url('Dashboard') }}"><li class="{{ $route == 'Dashboard' ? 'active' : '' }}"><i class="bi bi-columns-gap"></i>Overview</li></a>
            <a href="{{ url('Lamaran') }}"><li class="{{ $route == 'Lamaran' ? 'active' : '' }}"><i class="bi bi-send"></i>Lamaranku</li></a>
            <a href="{{ url('Orderan') }}"><li class="{{ $route == 'Orderan' ? 'active' : '' }}"><i class="bi bi-cart"></i>Orderan</li></a>
            <a href="{{ url('Proyek') }}"><li class="{{ $route == 'Proyek' ? 'active' : '' }}"><i class="bi bi-suitcase-lg"></i>Proyek Aktif</li></a>
            <a href="{{ url('Portofolio') }}"><li class="{{ $route == 'Portofolio' ? 'active' : '' }}"><i class="bi bi-folder2-open"></i>Portofolio</li></a>
            <a href="{{ url('Lencana') }}"><li class="{{ $route == 'Lencana' ? 'active' : '' }}"><i class="fa-solid fa-medal"></i>Lencana</li></a>
            <a href="{{ url('UbahProfil') }}"><li class="{{ $route == 'UbahProfil' ? 'active' : '' }}"><i class="fa-regular fa-user"></i>Ubah Profil</li></a>
        </ul>
    </div>

    <div class="sidebar-bottom">
        <ul>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 button-logout">
                    <i class="bi bi-box-arrow-right"></i>
                    {{ __('Log Out') }}
                </button>
            </form>
            <a href="{{ url('LowonganJasa') }}"><li><i class="bi bi-rocket-takeoff"></i>Browse Proyek</li></a>  
            <a href="/PasarJasa"><li><i class="bi bi-rocket-takeoff"></i>Browse Jasa</li></a>  

        </ul>
    </div>
</section>

<script>
    document.querySelectorAll('.sidebar-nav li, .sidebar-bottom li').forEach(item => {
        item.addEventListener('click', function () {
            document.querySelectorAll('.sidebar-nav li, .sidebar-bottom li').forEach(li => {
                li.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
</script>