<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data siswa - SantriKoding.com</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100">

    <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="text-center">
            <h3 class="text-2xl font-bold mb-2">Tutorial Laravel 13 untuk Pemula</h3>
            <h5 class="text-sm">
                <a href="https://santrikoding.com" class="text-blue-600 hover:underline">
                    SMK Pesat 
                </a>
            </h5>
            <hr class="my-6 border-gray-200">
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-200">
            <div class="p-6">

             

                <div class="overflow-x-auto">
                    <table class="w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-gray-50 text-gray-700">
                            <tr>
                                <th class="px-4 py-3 text-left font-semibold border-b">IMAGE</th>
                                <th class="px-4 py-3 text-left font-semibold border-b">TITLE</th>
                                <th class="px-4 py-3 text-left font-semibold border-b">PRICE</th>
                                <th class="px-4 py-3 text-left font-semibold border-b">STOCK</th>
                                <th class="px-4 py-3 text-left font-semibold border-b w-[220px]">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($siswas as $siswa)
                                <tr class="border-b last:border-b-0">
                                    <td class="px-4 py-3 font-medium text-gray-900">
                                        {{ $siswa->nama }}
                                    </td>
                                    <td class="px-4 py-3 text-gray-700">
                                        {{ $siswa->kelas }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-4 py-6">
                                        <div class="bg-red-50 border border-red-200 text-red-700
                                                    rounded-lg px-4 py-3">
                                            Data siswas belum ada.
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- <div class="mt-4">
                    {{ $siswas->links() }}
                </div> -->

            </div>
        </div>
    </div>

    <!-- SweetAlert Script -->
    <script>
        // SweetAlert for delete confirmation
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc2626',
                    cancelButtonColor: '#6b7280',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });

        // // SweetAlert for success message
        // @if (session('success'))
        //     Swal.fire({
        //         icon: 'success',
        //         title: 'Berhasil',
        //         text: '{{ session('success') }}',
        //         timer: 3000,
        //         showConfirmButton: false
        //     });
        // @endif
    </script>

</body>
</html>
