@php
    $route = request()->route()->getName();
@endphp

<section class="sidebar-klien">
    <div class="sidebar-klien-header">
        <img src="{{ asset('images/VokaraLight.png') }}" alt="Logo Vokara" width="110" height="50">
    </div>

    <div class="sidebar-klien-content">
        <div class="profil-klien-row">
            <div class="card-klien-profil">
                <p>Foto</p>
            </div>
            <div class="profil-klien-info">
                <h2>Nama Klien</h2>
                <p>SMK Informatika Pesat</p>
            </div>
        </div>
    </div>

    <div class="sidebar-klien-nav">
        <ul>
            <a href="{{ url('Dashboard_Klien') }}"><li class="{{ $route == 'Dashboard_Klien' ? 'active' : '' }}"><i class="bi bi-columns-gap"></i>Overview</li></a>
            <a href="{{ url('UbahKlien') }}"><li class="{{ $route == 'UbahKlien' ? 'active' : '' }}"><i class="fa-regular fa-user"></i>Ubah Profil</li></a>
            <a href="{{ url('Daftar_Klien') }}"><li class="{{ $route == 'Klien' ? 'active' : '' }}"><i class="fa-solid fa-user-graduate"></i>Pelamar</li></a>
            <a href="{{ url('Jasa') }}"><li class="{{ $route == 'Jasa' ? 'active' : '' }}"><i class="fa-solid fa-star"></i></i>Jasa Talenta</li></a>
        </ul>
    </div>

    <div class="sidebar-klien-bottom">
        <ul>
            <a href="{{ url('Lowongan') }}"><li><i class="bi bi-rocket-takeoff"></i>Lihat Proyek</li></a>  
            <a href="{{ url('PasarJasa') }}"><li><i class="bi bi-rocket-takeoff"></i>Lihat Talenta</li></a>  
            <li><i class="bi bi-box-arrow-right"></i>Keluar</li>
        </ul>
    </div>
</section>

<script>
    document.querySelectorAll('.sidebar-klien-nav li, .sidebar-klien-bottom li').forEach(item => {
        item.addEventListener('click', function () {
            document.querySelectorAll('.sidebar-klien-nav li, .sidebar-klien-bottom li').forEach(li => {
                li.classList.remove('active');
            });
            this.classList.add('active');
        });
    });
</script>
