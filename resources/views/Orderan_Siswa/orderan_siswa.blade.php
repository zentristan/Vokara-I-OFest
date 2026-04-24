<x-layout_dashboard>
<main class="main-content">
    <div class="lamaran-header">
        <h1>Pesanan Jasa</h1>
        <span class="total-badge">1 total</span>
    </div>

    <div class="lamaran-list">
        <a href="{{ url('Keterangan') }}">
        <div class="lamaran-card">
            <div class="lamaran-card-left">
                <div class="lamaran-icon">
                    <p>Foto Profil Klien</p>
                </div>
                <div class="lamaran-info">
                    <h3>Nama Jasa yang Dipesan Klien</h3>
                    <p>Nama Klien</p>
                </div>
            </div>
            <div class="lamaran-card-right d-flex align-items-end gap-2">
                <div class="status-badge menunggu">
                    <i class="bi bi-clock"></i>
                    <span>Pesanan Baru</span>
                </div>
                <div class="status-badge info">
                    <i class="bi bi-info-circle"></i>
                    <span>Lihat Selengkapnya</span>
                </div>
            </div>
        </div>
        </a>
        <div class="lamaran-card">
            <div class="lamaran-card-left">
                <div class="lamaran-icon">
                    <p>Foto Profil Klien</p>
                </div>
                <div class="lamaran-info">
                    <h3>Nama Jasa yang Dipesan Klien</h3>
                    <p>Nama Klien</p>
                </div>
            </div>
            <div class="lamaran-card-right d-flex align-items-end gap-2">
                <div class="status-badge ditolak">
                    <i class="bi bi-x-circle"></i>
                    <span>Lamaran Ditolak!</span>
                </div>
            </div>
        </div>
        <div class="lamaran-card">
            <div class="lamaran-card-left">
                <div class="lamaran-icon">
                    <p>Foto Profil Klien</p>
                </div>
                <div class="lamaran-info">
                    <h3>Nama Jasa yang Dipesan Klien</h3>
                    <p>Nama Klien</p>
                </div>
            </div>
            <div class="lamaran-card-right d-flex align-items-end gap-2">
                <div class="status-badge menunggumentor">
                    <i class="bi bi-info-circle"></i>
                    <span>Menunggu Konfirmasi Mentor</span>
                </div>
            </div>
        </div>
        <div class="lamaran-card">
            <div class="lamaran-card-left">
                <div class="lamaran-icon">
                    <p>Foto Profil Klien</p>
                </div>
                <div class="lamaran-info">
                    <h3>Nama Jasa yang Dipesan Klien</h3>
                    <p>Nama Klien</p>
                </div>
            </div>
            <div class="lamaran-card-right d-flex align-items-end gap-2">
                <div class="status-badge diterima">
                    <i class="bi bi-check-circle"></i>
                    <span>Diterima!</span>
                </div>
            </div>
        </div>
    </div>
</main>
</x-layout_dashboard>
