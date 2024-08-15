<x-dashboard-layout>
    <x-slot:title>Tambah Lembaga Desa Baru</x-slot:title>
    <h1 class="text-5xl mb-2 font-extrabold ml-8">Tambah Peraturan Desa Baru</h1>
    <p class="mb-8 ml-8">Halaman ini digunakan untuk menambahkan peraturan desa baru</p>

    <form method="POST" action="/dashboard/hukums" enctype="multipart/form-data">
        @csrf

        <div class="space-y-6 mr-4 mb-10 ml-8">
            <div>
                <label for="name" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Judul Peraturan :</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" autofocus autocomplete="off" required class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('name')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="slug" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Slug :</label>
                <input type="text" id="slug" name="slug" readonly value="{{ old('slug') }}" required class="@error('slug') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('slug')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div>
                <label class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white" for="file">File Lampiran :</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_help" id="file" type="file" accept=".pdf">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PDF only (MAX. 10MB).</p>
                @error('file')
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
            const nameInput = document.getElementById('name');
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
