@php
$route = request()->route()->getName();
@endphp

<section class="sidebar-mentor">
    <div class="sidebar-mentor-header">
        <img src="{{ asset('images/VokaraLight.png') }}" alt="Logo Vokara" width="110" height="50">
    </div>

    <div class="sidebar-mentor-content">
        <div class="profil-mentor-row">
            <div class="card-mentor-profil">
                <p>Foto</p>
            </div>
            <div class="profil-mentor-info">
                <h2>Nama Guru</h2>
                <p>SMK Informatika Pesat</p>
            </div>
        </div>
    </div>

    <div class="sidebar-mentor-nav">
        <ul>
            <a href="{{ url('Dashboard_Mentor') }}">
                <li class="{{ $route == 'Dashboard_Mentor' ? 'active' : '' }}"><i class="bi bi-columns-gap"></i>Overview</li>
            </a>
            <a href="{{ url('Daftar_Siswa') }}">
                <li class="{{ $route == 'Siswa' ? 'active' : '' }}"><i class="fa-solid fa-user-graduate"></i>Siswa</li>
            </a>
            <a href="{{ url('UbahGuru') }}">
                <li class="{{ $route == 'UbahGuru' ? 'active' : '' }}"><i class="fa-regular fa-user"></i>Ubah Profil</li>
            </a>
        </ul>
    </div>

    <div class="sidebar-mentor-bottom">
        <ul>
            <a href="{{ url('LowonganJasa') }}">
                <li><i class="bi bi-rocket-takeoff"></i>Lihat Proyek</li>
            </a>
            <a href="{{ url('PasarJasa') }}">
                <li><i class="bi bi-rocket-takeoff"></i>Lihat Talenta</li>
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 button-logout">
                    <i class="bi bi-box-arrow-right"></i>
                    {{ __('Log Out') }}
                </button>
            </form>
        </ul>
    </div>
</section>

<script>
    document.querySelectorAll('.sidebar-mentor-nav li, .sidebar-mentor-bottom li').forEach(item => {
        item.addEventListener('click', function() {
            document.querySelectorAll('.sidebar-mentor-nav li, .sidebar-mentor-bottom li').forEach(li => {
                li.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
</script>