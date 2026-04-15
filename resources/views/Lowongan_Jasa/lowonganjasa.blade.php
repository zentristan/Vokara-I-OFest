<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vokara Lowongan-Jasa</title>
    <link rel="stylesheet" href="../../css/lowonganjasa.css">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body{
            background: #0E1A1F;
        }
        .navbar {
            background-color: #0F2D2B;
            padding: 20px;
        }
        .logo {
            color: #E0F2EC;
        }
        a {
            color: #E0F2EC;
            text-decoration: none;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    
    <header class="navbar">
        <div class="logo">Vokara</div>
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

    <section class="hero">
        <h1>Lowongan Jasa</h1>

        <div class="post-box">
            <button> + Posting Proyek</button>
        </div>

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

    <footer>
        <div class="logo">Vokara</div>
        <div class="footer">
            <p>Website Freelance khusus siswa SMK</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>
</html>