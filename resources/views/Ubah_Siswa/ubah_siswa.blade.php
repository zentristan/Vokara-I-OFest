<x-layout_dashboard>
<main class="main-content">
    <div class="lencana-header">
        <h1>Ubah Profil</h1>
    </div>

    <div class="lencana-list">
        <div class="lencana-card">
            <form class="profile-form">
                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Lengkap <span class="required">*</span></label>
                        <input type="text" class="form-input" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Jurusan <span class="required">*</span></label>
                        <input type="text" class="form-input" placeholder="Pilih Jurusan">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Nama Sekolah <span class="required">*</span></label>
                        <input type="text" class="form-input" placeholder="SMKN...">
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <input type="text" class="form-input" placeholder="Jakarta, Bandung...">
                    </div>
                </div>

                <div class="form-group full-width">
                    <label>Bio / Deskripsi Diri</label>
                    <textarea class="form-input form-textarea" placeholder="Ceritakan tentang dirimu, keahlian, dan pengalamanmu..."></textarea>
                </div>

                <div class="form-group full-width">
                    <label>Keahlian / Skills</label>
                    <input type="text" class="form-input" placeholder="Tambah skill (misal: Figma, React...">
                </div>

                <div class="form-group full-width">
                    <div class="toggle-row">
                        <div class="toggle-info">
                            <span class="toggle-label">Status Ketersediaan</span>
                            <span class="toggle-desc">Tampilkan status tersedia untuk menerima order</span>
                        </div>
                        <label class="toggle-switch">
                            <input type="checkbox" checked>
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-simpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4.414A1 1 0 0 0 14.707 4L12 1.293A1 1 0 0 0 11.293 1zm5.5 11.5v-2.5h1v2.5h-1zM3.5 3.5h8v2h-8v-2zM8 10a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/>
                        </svg>
                        Simpan Profil
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
</x-layout_dashboard>