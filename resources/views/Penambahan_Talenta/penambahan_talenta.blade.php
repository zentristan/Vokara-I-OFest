<x-layout :showFooter="false">

    <div class="back-button p-0">
        <a href="/PasarJasa" class="text-decoration-none">
            <i class="fa-solid fa-arrow-left" style="color: #808080;"></i>
            <span class="back-home-button outfit text-color-secondary">&nbsp;Kembali ke Temukan Talenta</span>
        </a>
    </div>

    <div class="container-input">
        <form action="{{ route('Lowongan.store') }}" method="POST">
            <div class="justify-content-between d-flex">
                @csrf
                <div class="input-left">
                    <div class="form-input-left">
                        <h2 class="text-color jakarta mb-2">Nama Jasa *</h2>
                        <p class="text-color-secondary outfit mb-2">Tuliskan nama jasa yang akan anda tawarkan</p>
                        <input class="input-box mb-4" type="text" name="nama-jasa" placeholder="Nama jasa">
                    </div>
                    <div class="form-input-left">
                        <h2 class="text-color jakarta mb-2">Deskripsi *</h2>
                        <p class="text-color-secondary outfit mb-2">Tuliskan deskripsi untuk jasa yang anda tawarkan, jelaskan dengan lengkap dan detail</p>
                        <textarea class="input-box mb-4" rows="7" name="deskripsi-jasa" placeholder="Deskripsi jasa"></textarea>
                    </div>
                    <div class="form-input-left">
                        <h2 class="text-color jakarta mb-2">Harga (Rp) *</h2>
                        <p class="text-color-secondary outfit mb-2">Tuliskan range harga yang akan anda tawarkan untuk jasa anda</p>
                        <input class="input-box mb-4" type="number" name="harga-jasa" placeholder="Rp. ">
                    </div>
                </div>
                <div class="input-right">
                    <div class="form-input-right">
                        <h2 class="text-color jakarta mb-2">Thumbnail *</h2>
                        <p class="text-color-secondary outfit mb-2">Upload thumbnail untuk jasa yang anda tawarkan</p>
                        <input class="input-file mb-3" type="file" accept=".jpg, .jpeg, .png" name="thumbnail-jasa">
                        <img src="{{ asset("") }}" class="img-thumbnail mb-3 rounded-3">
                    </div>
                    <div class="form-input-right">
                        <h2 class="text-color jakarta mb-2">Kategori *</h2>
                        <select class="input-box mb-4" name="kategori" id="kategori">
                            {{-- @foreach ($collection as $item) --}}
                            <option></option>
                            {{-- @endforeach --}}
                        </select>
                    </div>
                    <div class="form-input-right">
                        <h2 class="text-color jakarta mb-2">Tenggat Waktu (Hari) *</h2>
                        <p class="text-color-secondary outfit mb-2">Masukkan jumlah hari yang dibutuhkan untuk menyelesaikan jasa ini</p>
                        <input class="input-box mb-4" type="number" name="nama-jasa" placeholder="cth: 10">
                    </div>
                </div>
            </div>
    </div>

    <footer class="footer-submit-penambahan d-flex justify-content-center align-items-center mt-5">
        <button type="submit" class="submit-penambahan-talenta">Post Proyek Sekarang</button>
    </footer>
    </form>
</x-layout>