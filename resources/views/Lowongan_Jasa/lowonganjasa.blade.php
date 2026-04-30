<x-layout>

    <body>
        <div class="kontener">

            <section class="hero-tp">

                <div class="hero-inner">

                    <div class="hero-top d-flex justify-content-between">
                        <h1 class="hero-title">Temukan Proyek</h1>
                        <a href="{{route('Lowongan.create') }}" class="tambah-data-button">Tambah Data</a>
                    </div>
                    <h3 class="hero-subtitle">0 Proyek Ditemukan untuk Siswa SMK</h3>
                    <div class="search-box-tp d-flex gap-1">
                        <input type="text" placeholder="Cari Proyek, Kategori...">
                        <button class="search-button-tp"><img src="{{ asset("images/magnifying-glass-solid.png") }}"
                                width="25" height="25"></button>
                                
                    </div>
                </div>

            </section>
            
            <section class="content-tp">
                <aside class="sidebar-tp">
                    
                    <h3>Kategori</h3>
                    <ul>
                        @foreach($kategori as $kategoriData)
                        <a href="{{route('filterKategoriProyek', $kategoriData->id)}}">
                            <li class="outfit ">{{$kategoriData->namaKategori}}</li>
                        </a>
                        @endforeach
                        <!-- active (untuk kelas aktif sidebar) -->
                    </ul>
                </aside>


                <div class="jobs-tp row row-cols-lg-3 gap-3">
                    @foreach($klien as $klienjob)
                    <a href="{{route('LowonganJasa.show', $klienjob->id)}}">
                        <div class="col card-tp p-0 hover-properti">
                            <span class="card-tag-tp outfit"><img class="me-1" width="15" height="15" src="{{ asset("images/tag-solid.png") }}">{{$klienjob->namaKategori}}</span>
                            <div class="card-bottom-tp d-flex flex-column">
                                <p class="card-bottom-title-tp text-color">{{$klienjob->judul_proyek}}</p>
                                <p class="card-bottom-subtitle-tp text-truncate">{{$klienjob->deskripsi}}</p>
                                <div class="card-bottom-info d-flex justify-content-between">
                                    <div class="d-flex gap-3 object-fit-contain mt-3">
                                        <div class="pelamar-tp d-flex object-fit-contain">
                                            <img src="{{ asset("images/user-group-solid.png") }}">
                                            <p class="outfit mb-0">10 Pelamar</p>
                                        </div>
                                        <div class="deadline-tp d-flex object-fit-contain">
                                            <img src="{{ asset("images/clock-regular.png") }}">
                                            <p class="outfit">{{$klienjob->deadline}} Hari</p>
                                        </div>
                                    </div>
                                    <div class="harga-tp d-flex flex-column mt-2">
                                        <p class="harga-title outfit text-end">Mulai dari</p>
                                        <p class="harga-angka outfit">Rp{{ number_format($klienjob->harga, 0, ',', '.')}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </section>
        </div>
</x-layout>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y"
    crossorigin="anonymous"></script>
</body>

</html>