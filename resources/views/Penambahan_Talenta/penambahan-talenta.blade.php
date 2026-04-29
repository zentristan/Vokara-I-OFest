<x-layout :showFooter="false">
    <form action="">
        @csrf
        <div class="container my-5">
            <a href="/PasarJasa" class="text-decoration-none my-5"><i class="fa-solid fa-arrow-left" style="color: rgb(224, 242, 236);"></i><span class="back-home-button">&nbsp;Kembali ke Temukan Talenta</span></a>
            <div class="d-flex">
                <div class="row row-cols-1 mx-1">
                    <div class="col">
                        <div class="form-group">
                            <h4 class="form-heading">Judul *</h4>
                            <p class="form-deskripsi">Tuliskan judul untuk jasa yang akan anda tawarkan</p>
                            <input type="text" class="input-box w-100" placeholder="Judul jasa">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-group">
                                <h4 class="form-heading">Deskripsi *</h4>
                                <p class="form-deskripsi">Tuliskan deskripsi untuk jasa yang anda tawarkan, jelaskan dengan lengkap dan detail</p>
                                <textarea class="input-box w-100" id="" placeholder="Deskripsi Proyek"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <h4 class="form-heading">Harga (Rp) *</h4>
                            <p class="form-deskripsi">Tuliskan range harga yang akan anda tawarkan untuk jasa anda</p>
                            <input type="number" name="harga" class="input-box w-100" placeholder="Rp.">
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="form-group">

                        </div>
                    </div>
                    <div class="col">
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
                    <div class="col">
                        <div class="form-group">
                            <h4 class="form-heading">Tenggat Waktu *</h4>
                            <p class="form-deskripsi">Masukkan jumlah hari yang dibutuhkan untuk menyelesaikan jasa ini</p>
                            <input type="number" name="deadline" class="input-box w-100" placeholder="cth. 10.">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-submit-penambahan d-flex justify-content-center align-items-center mt-5">
            <button type="submit" class="submit-penambahan-talenta">Post Proyek Sekarang</button>
        </footer>
    </form>
</x-layout>