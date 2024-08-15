<x-dashboard-layout>
    <x-slot:title>Tambah Jabatan Baru</x-slot:title>
    <h1 class="text-5xl mb-2 font-extrabold ml-8">Tambah Jabatan Baru</h1>
    <p class="mb-8 ml-8">Halaman ini digunakan untuk menambahkan jabatan baru</p>

    <form method="POST" action="/dashboard/pegawais/{{ $pegawai->slug }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="space-y-6 mr-4 mb-10 ml-8">
            <div>
                <label for="nama" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Nama Pegawai:</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $pegawai->nama) }}" autofocus autocomplete="off" required class="@error('nama') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('nama')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="jabatan" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jabatan:</label>
                <input type="text" id="jabatan" name="jabatan" value="{{ old('jabatan', $pegawai->jabatan) }}" required autocomplete="off" class="@error('jabatan') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('jabatan')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="slug" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Slug :</label>
                <input type="text" id="slug" name="slug" readonly value="{{ old('slug', $pegawai->slug) }}" required class="@error('slug') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('slug')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-xl font-semibold text-gray-900 dark:text-white">Foto :</label>
                <input type="hidden" id="oldImage" name="oldImage" value="{{ $pegawai->image }}">
                <div class="flex flex-col sm:flex-row items-center justify-center w-full space-x-4 space-y-4">
                    <label for="image" class="flex flex-col items-center justify-center w-full sm:w-1/2 h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:border-gray-800 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Pilih/Ubah Gambar</span> | drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF</p>
                        </div>
                        <input id="image" name="image" type="file" class="@error('image') is-invalid @enderror hidden" accept="image/*" />
                    </label>
                    <div id="preview-container" class="w-full sm:w-1/2 mb-4 sm:mb-0">
                        @if ($pegawai->image)
                            <img src="{{ asset('storage/' .  $pegawai->image ) }}" alt="">
                        @endif
                    </div>
                </div>
                @error('image')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>
            <div>
                <button type="submit" class="inline-flex text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">
                    <svg class="w-6 h-6 mr-2 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7.414A2 2 0 0 0 20.414 6L18 3.586A2 2 0 0 0 16.586 3H5Zm3 11a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v6H8v-6Zm1-7V5h6v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M14 17h-4v-2h4v2Z" clip-rule="evenodd"/>
                    </svg>
                    Simpan
                </button>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nameInput = document.getElementById('jabatan');
            const slugInput = document.getElementById('slug');
    
            nameInput.addEventListener('input', function() {
                const slugValue = nameInput.value
                    .toLowerCase()
                    .replace(/\s+/g, '-')
                    .replace(/[^\w\-]+/g, '') // Menghapus karakter non-alfanumerik kecuali tanda hubung
                    .replace(/\-\-+/g, '-')    // Mengganti tanda hubung ganda dengan satu tanda hubung
                    .replace(/^-+/, '')        // Menghapus tanda hubung dari awal
                    .replace(/-+$/, '');       // Menghapus tanda hubung dari akhir
    
                slugInput.value = slugValue;
            });
        });
    </script>
</x-dashboard-layout>
