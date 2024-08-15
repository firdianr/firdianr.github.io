<x-dashboard-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="text-5xl mb-2 font-extrabold ml-8">{{ $title }}</h1>
    <p class="mb-8 ml-8">Halaman ini digunakan untuk menambahkan kategori baru untuk berita</p>

    <form method="POST" action="/dashboard/categories" enctype="multipart/form-data">
        @csrf

        <div class="space-y-6 mr-4 mb-10 ml-8">
            <div>
                <label for="name" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Nama Kategori :</label>
                <input type="text" id="name" name="name" autofocus autocomplete="off" value="{{ old('name') }}" required class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                <label for="color" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Warna Kategori :</label>
                <select id="color" name="color" required class="@error('color') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="">-- Pilih Warna Background Kategori --</option>
                    <option value="bg-red-200" {{ old('color') == 'bg-red-200' ? 'selected' : '' }}>Red</option>
                    <option value="bg-blue-200" {{ old('color') == 'bg-blue-200' ? 'selected' : '' }}>Blue</option>
                    <option value="bg-yellow-200" {{ old('color') == 'bg-yellow-200' ? 'selected' : '' }}>Yellow</option>
                    <option value="bg-green-200" {{ old('color') == 'bg-green-200' ? 'selected' : '' }}>Green</option>
                    <option value="bg-purple-200" {{ old('color') == 'bg-purple-200' ? 'selected' : '' }}>Purple</option>
                    <option value="bg-pink-200" {{ old('color') == 'bg-pink-200' ? 'selected' : '' }}>Pink</option>
                    <option value="bg-indigo-200" {{ old('color') == 'bg-indigo-200' ? 'selected' : '' }}>Indigo</option>
                    <option value="bg-gray-200" {{ old('color') == 'bg-gray-200' ? 'selected' : '' }}>Gray</option>
                    <option value="bg-orange-200" {{ old('color') == 'bg-orange-200' ? 'selected' : '' }}>Orange</option>
                    <option value="bg-teal-200" {{ old('color') == 'bg-teal-200' ? 'selected' : '' }}>Teal</option>
                    <option value="bg-cyan-200" {{ old('color') == 'bg-cyan-200' ? 'selected' : '' }}>Cyan</option>
                    <option value="bg-amber-200" {{ old('color') == 'bg-amber-200' ? 'selected' : '' }}>Amber</option>
                    <option value="bg-lime-200" {{ old('color') == 'bg-lime-200' ? 'selected' : '' }}>Lime</option>
                    <option value="bg-emerald-200" {{ old('color') == 'bg-emerald-200' ? 'selected' : '' }}>Emerald</option>
                    <option value="bg-rose-200" {{ old('color') == 'bg-rose-200' ? 'selected' : '' }}>Rose</option>
                    <option value="bg-fuchsia-200" {{ old('color') == 'bg-fuchsia-200' ? 'selected' : '' }}>Fuchsia</option>
                    <option value="bg-violet-200" {{ old('color') == 'bg-violet-200' ? 'selected' : '' }}>Violet</option>
                    <option value="bg-stone-200" {{ old('color') == 'bg-stone-200' ? 'selected' : '' }}>Stone</option>
                    <option value="bg-neutral-200" {{ old('color') == 'bg-neutral-200' ? 'selected' : '' }}>Neutral</option>
                    <option value="bg-sky-200" {{ old('color') == 'bg-sky-200' ? 'selected' : '' }}>Sky</option>
                    <option value="bg-slate-200" {{ old('color') == 'bg-slate-200' ? 'selected' : '' }}>Slate</option>
                </select>
                @error('color')
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