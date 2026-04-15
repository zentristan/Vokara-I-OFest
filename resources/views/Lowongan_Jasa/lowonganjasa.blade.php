<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vokara Lowongan-Jasa</title>
    
    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/lowonganjasa.css') }}">
    
    <!-- Font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Outfit:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

</head>
<body>

    <header class="navbar">
        <img src="{{ asset('images/VokaraLight.png') }}" alt="Logo Vokara" width="120" height="80">
        <nav>
            <a href="#">Pasar Jasa</a>
            <a href="#">Lowongan Jasa</a>
            <a href="#">Placeholder</a>
        </nav>
        <div class="masuk">
            <a href="#">Masuk</a>
            <button>Mulai Daftar</button>
        </div>
    </header>   

<div class="kontener">
    
    <section class="hero" style="background-image: url('{{ asset('images/background.png') }}');">
        <h1 class="hero-title">Lowongan Jasa</h1>

        <div class="search-box">
            <input type="text" placeholder="Cari Proyek, kategori...">
        </div>

        <div class="filters">
            <button class="active">Semua</button>
            <button class="active">Pemula</button>
            <button class="active">Menengah</button>
            <button class="active">Mahir</button>
        </div>
    </section>

    <section class="content">
        <aside class="sidebar">
        <h3>Kategori</h3>
        <ul>
            <li class="active">Semua</li>
            <li>Menengah</li>
            <li>Menengah</li>
            <li>Menengah</li>
            <li>Menengah</li>
        </ul>
        </aside>
    </section>

    <div class="jobs">
        <div class="card">
            <span class="job-title">Pemula</span>
        </div>

        <div class="card">
            <span class="job-title">Pemula</span>
        </div>

        <div class="card">
            <span class="job-title">Semua</span>
        </div>

        <div class="card">
            <span class="job-title">Menengah</span>
        </div>

        <div class="card">
            <span class="job-title">Menengah</span>
        </div>

        <div class="card">
            <span class="job-title">Semua</span>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-left">
            <h2>Vokara</h2>
            <p>Website Freelance khusus siswa SMK</p>
        </div>

        <div class="footer-links">
            <div>
                <h4>Page 1</h4>
                <p>Menengah</p>
                <p>Menengah</p>
                <p>Menengah</p>
            </div>

            <div>
                <h4>Page 2</h4>
                <p>Menengah</p>
                <p>Menengah</p>
                <p>Menengah</p>
            </div>

            <div>
                <h4>Page 3</h4>
                <p>Menengah</p>
                <p>Menengah</p>
                <p>Menengah</p>
            </div>
        </div>

        <div class="map">Map</div>

        <p class="copyright">
            &copy; 2026 Vokara. Seluruh Hak Cipta Dilindungi Undang-Undang
        </p>
    </footer>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>