<x-dashboard-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="text-5xl mb-2 font-extrabold ml-8">{{ $title }}</h1>
    <p class="mb-8 ml-8">Halaman ini digunakan untuk menambahkan kategori baru untuk berita</p>

    <form method="POST" action="/dashboard/categories/{{ $category->slug }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="space-y-6 mr-4 mb-10 ml-8">
            <div>
                <label for="name" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Nama Kategori :</label>
                <input type="text" id="name" name="name" autofocus autocomplete="off" value="{{ old('name', $category->name) }}" required class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('name')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="slug" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Slug :</label>
                <input type="text" id="slug" name="slug" readonly value="{{ old('slug', $category->slug) }}" required class="@error('slug') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                    <option value="bg-red-200" {{ old('color') == 'bg-red-200' || $category->color == 'bg-red-200' ? 'selected' : '' }}>Red</option>
                    <option value="bg-blue-200" {{ old('color') == 'bg-blue-200' || $category->color == 'bg-blue-200' ? 'selected' : '' }}>Blue</option>
                    <option value="bg-yellow-200" {{ old('color') == 'bg-yellow-200' || $category->color == 'bg-yellow-200' ? 'selected' : '' }}>Yellow</option>
                    <option value="bg-green-200" {{ old('color') == 'bg-green-200' || $category->color == 'bg-green-200' ? 'selected' : '' }}>Green</option>
                    <option value="bg-purple-200" {{ old('color') == 'bg-purple-200' || $category->color == 'bg-purple-200' ? 'selected' : '' }}>Purple</option>
                    <option value="bg-pink-200" {{ old('color') == 'bg-pink-200' || $category->color == 'bg-pink-200' ? 'selected' : '' }}>Pink</option>
                    <option value="bg-indigo-200" {{ old('color') == 'bg-indigo-200' || $category->color == 'bg-indigo-200' ? 'selected' : '' }}>Indigo</option>
                    <option value="bg-gray-200" {{ old('color') == 'bg-gray-200' || $category->color == 'bg-gray-200' ? 'selected' : '' }}>Gray</option>
                    <option value="bg-orange-200" {{ old('color') == 'bg-orange-200' || $category->color == 'bg-orange-200' ? 'selected' : '' }}>Orange</option>
                    <option value="bg-teal-200" {{ old('color') == 'bg-teal-200' || $category->color == 'bg-teal-200' ? 'selected' : '' }}>Teal</option>
                    <option value="bg-cyan-200" {{ old('color') == 'bg-cyan-200' || $category->color == 'bg-cyan-200' ? 'selected' : '' }}>Cyan</option>
                    <option value="bg-amber-200" {{ old('color') == 'bg-amber-200' || $category->color == 'bg-amber-200' ? 'selected' : '' }}>Amber</option>
                    <option value="bg-lime-200" {{ old('color') == 'bg-lime-200' || $category->color == 'bg-lime-200' ? 'selected' : '' }}>Lime</option>
                    <option value="bg-emerald-200" {{ old('color') == 'bg-emerald-200' || $category->color == 'bg-emerald-200' ? 'selected' : '' }}>Emerald</option>
                    <option value="bg-rose-200" {{ old('color') == 'bg-rose-200' || $category->color == 'bg-rose-200' ? 'selected' : '' }}>Rose</option>
                    <option value="bg-fuchsia-200" {{ old('color') == 'bg-fuchsia-200' || $category->color == 'bg-fuchsia-200' ? 'selected' : '' }}>Fuchsia</option>
                    <option value="bg-violet-200" {{ old('color') == 'bg-violet-200' || $category->color == 'bg-violet-200' ? 'selected' : '' }}>Violet</option>
                    <option value="bg-stone-200" {{ old('color') == 'bg-stone-200' || $category->color == 'bg-stone-200' ? 'selected' : '' }}>Stone</option>
                    <option value="bg-neutral-200" {{ old('color') == 'bg-neutral-200' || $category->color == 'bg-neutral-200' ? 'selected' : '' }}>Neutral</option>
                    <option value="bg-sky-200" {{ old('color') == 'bg-sky-200' || $category->color == 'bg-sky-200' ? 'selected' : '' }}>Sky</option>
                    <option value="bg-slate-200" {{ old('color') == 'bg-slate-200' || $category->color == 'bg-slate-200' ? 'selected' : '' }}>Slate</option>
                </select>
                @error('color')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>            
            
            
            <div>
                <button type="submit" class="px-2 py-3 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">                     
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