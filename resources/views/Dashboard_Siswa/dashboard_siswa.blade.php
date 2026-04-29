<x-layout_dashboard>
<div class="kontener">

    <div class="card-siswa">
        <h2>Halo, {{ Auth::user()->name }}</h2>
        <p>Lengkapi profilmu untuk mulai melamar proyek!</p>
        <button>
            Atur Profil <i class="bi bi-arrow-right"></i>
        </button>
    </div>

    <div class="detail-siswa">
        <div class="card-detail">
            <div class="icon-box"><i class="bi bi-rocket-takeoff"></i></div>
            <h3>0</h3>
            <p>Lamaran Terkirim</p>
        </div>
        <div class="card-detail">
            <div class="icon-box"><i class="bi bi-check-circle"></i></div>
            <h3>0</h3>
            <p>Diterima</p>
        </div>
        <div class="card-detail">
            <div class="icon-box"><i class="bi bi-trophy"></i></div>
            <h3>0</h3>
            <p>Selesai</p>
        </div>
        <div class="card-detail">
            <div class="icon-box"><i class="bi bi-star"></i></div>
            <h3>0</h3>
            <p>Rating</p>
        </div>
    </div>

    <div class="card-perjalanan">
        <div class="perjalanan-title">
            <i class="bi bi-graph-up"></i>
            <h4>Perjalananmu</h4>
        </div>
        <div class="stepper">
            <div class="step-circle active"><i class="bi bi-check-lg"></i></div>
            <div class="step-line"></div>
            <div class="step-circle">2</div>
            <div class="step-line"></div>
            <div class="step-circle">3</div>
            <div class="step-line"></div>
            <div class="step-circle">4</div>
            <div class="step-line"></div>
            <div class="step-circle">5</div>
            <div class="step-line"></div>
            <div class="step-circle">6</div>
        </div>
    </div>

    <div class="card-bottom-row">
        <div class="card-bottom">
            <div class="icon-box"><i class="bi bi-rocket-takeoff"></i></div>
            <div>
                <h5>Browse Proyek Baru</h5>
                <p>Temukan proyek yang sesuai skillmu</p>
            </div>
        </div>
        <div class="card-bottom">
            <div class="icon-box"><i class="bi bi-clock-history"></i></div>
            <div>
                <h5>Proyek Aktif</h5>
                <p>0 proyek menunggu penyelesaian</p>
            </div>
        </div>
    </div>

</div>
</x-layout_dashboard>