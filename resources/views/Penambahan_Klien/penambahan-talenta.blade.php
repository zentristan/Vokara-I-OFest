<x-layout :showFooter="false">
    <div class="container my-5">
        <a href="/Lowongan" class="text-decoration-none my-5"><i class="fa-solid fa-arrow-left" style="color: rgb(224, 242, 236);"></i><span class="back-home-button">&nbsp;Kembali ke Temukan Proyek</span></a>
    </div>
    <!-- <form action="http://127.0.0.1:8000/Lowongan" method="POST"> -->
    <form action="{{ route('Lowongan.store') }}" method="POST">
        <div class="container" style="max-width: 1100px;">
            <div class="row justify-content-center row-cols-1">
                @csrf
                <div class="col-8 m-2">
                    <div class="form-group">
                        <h4 class="form-heading">Nama Proyek *</h4>
                        <p class="form-deskripsi">Tuliskan nama untuk proyek yang akan anda tawarkan</p>
                        <input type="text" name="judul_proyek" class="input-box w-100" placeholder="Nama Proyek">
                    </div>
                </div>
                <div class="col-8 m-2">
                    <div class="form-group">
                        <h4 class="form-heading">Deskripsi *</h4>
                        <p class="form-deskripsi">Tuliskan deskripsi proyek dengan jelas dan detail</p>
                        <textarea name="deskripsi" class="input-box w-100" id="" placeholder="Deskripsi Proyek"></textarea>
                    </div>
                </div>
                <div class="col-8 m-2">
                    <div class="form-group">
                        <h4 class="form-heading">Harga (Rp) *</h4>
                        <p class="form-deskripsi">Tuliskan range harga yang akan anda tawarkan untuk jasa anda</p>
                        <input type="number" name="harga" class="input-box w-100" placeholder="Rp.">
                    </div>
                </div>
                <div class="col-8 m-2">
                    <div class="form-group">
                        <h4 class="form-heading">Kategori *</h4>
                        <p class="form-deskripsi">Tuliskan range harga yang akan anda tawarkan untuk jasa anda</p>
                        <select name="id_kategori" id="" class="input-box w-100">
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="RPL">RPL</option>
                            <option value="DKV">DKV</option>
                        </select>
                    </div>
                </div>
                <div class="col-8 m-2">
                    <div class="form-group">
                        <h4 class="form-heading">Tenggat Waktu *</h4>
                        <p class="form-deskripsi">Masukkan jumlah hari yang dibutuhkan untuk menyelesaikan jasa ini</p>
                        <input type="number" name="deadline" class="input-box w-100" placeholder="cth. 10.">
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer-submit-penambahan d-flex justify-content-center align-items-center mt-5">
            <button type="submit" class="submit-penambahan-talenta">Post Proyek Sekarang</button>
        </footer>
    </form>
</x-layout>