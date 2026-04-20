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
                <h2>Nama Siswa</h2>
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
            <a href="{{ url('Dashboard') }}"><li><i class="bi bi-columns-gap"></i>Overview</li></a>
            <a href="{{ url('Lamaran') }}"><li><i class="bi bi-send"></i>Lamaranku</li></a>
            <a href="{{ url('Proyek') }}"><li><i class="bi bi-suitcase-lg"></i>Proyek Aktif</li></a>
            <a href="{{ url('Portofolio') }}"><li><i class="bi bi-folder2-open"></i>Portofolio</li></a>
            <a href="{{ url('Lencana') }}"><li><i class="fa-solid fa-medal"></i>Lencana</li></a>
            <a href="{{ url('UbahProfil') }}"><li><i class="fa-regular fa-user"></i>Ubah Profil</li></a>
        </ul>
    </div>

    <div class="sidebar-bottom">
        <ul>
            <li><i class="bi bi-rocket-takeoff"></i>Browse Proyek</li>
            <li><i class="bi bi-box-arrow-right"></i>Keluar</li>
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