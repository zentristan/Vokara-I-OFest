<!-- @props(['kategori']) -->

<aside class="sidebar-tp">
    <h3>Kategori</h3>
    <ul>
        @foreach($kategori as $kategoriData)
        <li class="outfit ">{{$kategoriData->namaKategori}}</li>
        @endforeach
        <!-- active (untuk kelas aktif sidebar) -->
    </ul>
</aside>