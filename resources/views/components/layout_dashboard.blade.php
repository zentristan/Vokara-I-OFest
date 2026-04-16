<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vokara</title>

    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Outfit:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard_siswa.css') }}">
</head>
<body>

    <div class="dashboard-wrapper d-flex">
        <x-sidebar />

        <div class="kontener">

        <div class="card-siswa">
            <h2>Halo, Nama Siswa!</h2>
            <p>Lengkapi profilmu untuk mulai melamar proyek!</p>
            <button>
                Atur Profil <i class="bi bi-arrow-right"></i>
            </button>
        </div>

        <div class="detail-siswa">
            <div class="card-detail">
                <div class="icon-box">
                    <i class="bi bi-rocket-takeoff"></i>
                </div>
                <h3>0</h3>
                <p>Lamaran Terkirim</p>
            </div>
            <div class="card-detail">
                <div class="icon-box">
                    <i class="bi bi-check-circle"></i>
                </div>
                <h3>0</h3>
                <p>Diterima</p>
            </div>
            <div class="card-detail">
                <div class="icon-box">
                    <i class="bi bi-trophy"></i>
                </div>
                <h3>0</h3>
                <p>Selesai</p>
            </div>
            <div class="card-detail">
                <div class="icon-box">
                    <i class="bi bi-star"></i>
                </div>
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
            <div class="step active">
                <div class="step-circle active">
                    <i class="bi bi-check-lg"></i>
                </div>
            </div>
            <div class="step-line"></div>
            <div class="step">
                <div class="step-circle">2</div>
            </div>
            <div class="step-line"></div>
            <div class="step">
                <div class="step-circle">3</div>
            </div>
            <div class="step-line"></div>
            <div class="step">
                <div class="step-circle">4</div>
            </div>
            <div class="step-line"></div>
            <div class="step">
                <div class="step-circle">5</div>
            </div>
            <div class="step-line"></div>
            <div class="step">
                <div class="step-circle">6</div>
            </div>
        </div>
    </div>

    <div class="card-bottom-row">
        <div class="card-bottom">
            <div class="icon-box">
                <i class="bi bi-rocket-takeoff"></i>
            </div>
            <div>
                <h5>Browse Proyek Baru</h5>
                <p>Temukan proyek yang sesuai skillmu</p>
            </div>
        </div>
        <div class="card-bottom">
            <div class="icon-box">
                <i class="bi bi-clock-history"></i>
            </div>
            <div>
                <h5>Proyek Aktif</h5>
                <p>0 proyek menunggu penyelesaian</p>
            </div>
        </div>
    </div>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>