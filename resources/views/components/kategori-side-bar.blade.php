<!-- @props(['kategori']) -->

<aside class="sidebar-tp">
    <h3>Kategori</h3>
    <ul>
        @foreach($kategori as $kategoriData)
        <a href="{{route('filterKategori', $kategoriData->id)}}">
        <li class="outfit ">{{$kategoriData->namaKategori}}</li>
        </a>
        @endforeach
        <!-- active (untuk kelas aktif sidebar) -->
    </ul>
</aside>