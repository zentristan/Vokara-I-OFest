<x-layout_dashboard_mentor>
    <div class="kontener">

        <div class="card-siswa">
            <h2>Halo, {{ Auth::user()?->name }}!</h2>
            <p>Lengkapi profilmu untuk mulai mendampingi murid muridmu!</p>
            <button>
                Atur Profil <i class="bi bi-arrow-right"></i>
            </button>
        </div>

        <div class="card-siswa">
            <div class="siswa-title">
                <i class="fa-solid fa-user-graduate"></i>
                <h4>Siswa-Siswa Mu</h4>
                <span class="siswa-count">+9 Siswa</span>
            </div>
            <div class="card-siswa-grid">
                <div class="card-item-siswa">
                    <div class="foto-siswa"></div>
                    <p class="nama-siswa">Nama Siswa</p>
                    <button class="btn-lihat">Lihat Proyek <i class="bi bi-arrow-right"></i></button>
                </div>

                <div class="card-item-siswa">
                    <div class="foto-siswa"></div>
                    <p class="nama-siswa">Nama Siswa</p>
                    <button class="btn-lihat">Lihat Proyek <i class="bi bi-arrow-right"></i></button>
                </div>

                <div class="card-item-siswa">
                    <div class="foto-siswa"></div>
                    <p class="nama-siswa">Nama Siswa</p>
                    <button class="btn-lihat">Lihat Proyek <i class="bi bi-arrow-right"></i></button>
                </div>

                <div class="card-item-siswa">
                    <div class="foto-siswa"></div>
                    <p class="nama-siswa">Nama Siswa</p>
                    <button class="btn-lihat">Lihat Proyek <i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>

    </div>
</x-layout_dashboard_mentor>