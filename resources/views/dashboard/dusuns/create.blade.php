<x-dashboard-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="text-5xl mb-2 font-extrabold ml-8">{{ $title }}</h1>
    <p class="mb-8 ml-8">Halaman ini digunakan untuk menambahkan dusun baru</p>

    <form method="POST" action="/dashboard/dusuns" enctype="multipart/form-data">
        @csrf

        <div class="space-y-6 mr-4 mb-10 ml-8">
            <div>
                <label for="name" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Nama dusun :</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                <label for="kadus" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Kepala Dusun :</label>
                <input type="text" id="kadus" name="kadus" value="{{ old('kadus') }}" required class="@error('kadus') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('kadus')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="rw" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah RW :</label>
                <input type="number" id="rw" name="rw" value="{{ old('rw') }}" required class="@error('rw') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('rw')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="rt" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah RT :</label>
                <input type="number" id="rt" name="rt" value="{{ old('rt') }}" required class="@error('rt') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('rt')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
                
            <div>
                <label for="image" class="block text-xl font-semibold text-gray-900 dark:text-white">Gambar Halaman Depan :</label>
                <input type="hidden" id="oldImage" name="oldImage">
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
                    </div>
                </div>
                @error('image')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div>
                <label for="description" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Deskripsi Gambar :</label>
                <input type="text" id="description" name="description" value="{{ old('description') }}" required class="@error('description') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('description')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>
            
            <div>
                <label for="latar_belakang" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Latar Belakang Dusun :</label>
                <input id="latar_belakang" type="hidden" name="latar_belakang" value="{{ old('latar_belakang') }}">
                <trix-editor class="trix-editor" input="latar_belakang"></trix-editor>
                @error('latar_belakang')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            
            <div>
                <button type="submit" class="px-2 py-3 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">                     
                    <svg class="w-6 h-6 mr-2 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2M12 4v12m0-12 4 4m-4-4L8 8"/>
                    </svg>                      
                    Tambahkan
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