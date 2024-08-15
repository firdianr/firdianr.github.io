<x-dashboard-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="text-5xl mb-2 font-extrabold ml-12">{{ $title }}</h1>
    <p class="mb-8 ml-12">Halaman ini digunakan untuk mengubah isi berita yang sudah dibuat sebelumnya</p>

    <form method="POST" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="space-y-6 mr-4 mb-10 ml-12">
            {{-- <div class="relative">
                <input type="text" id="floating_outlined" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border-1 border-black appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " autocomplete="off" />
                <label for="floating_outlined" class="absolute text-sm text-black dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-gray-300 dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                    Judul Berita
                </label>
            </div> --}}
            
            <div>
                <label for="title" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Judul Berita :</label>
                <input type="text" id="title" name="title" value="{{ old('title', $post->title) }}" autofocus required autocomplete="off" class="@error('title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('title')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="slug" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Slug :</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" readonly required class="@error('slug') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('slug')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="writer" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Penulis :</label>
                <input type="text" id="writer" name="writer" value="{{ old('writer', $post->writer) }}" required autocomplete="off" class="@error('writer') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('writer')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div>
                <label for="editor" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Editor :</label>
                <input type="text" id="editor" name="editor" value="{{ old('editor', $post->editor) }}" required autocomplete="off" class="@error('editor') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('editor')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="category_id" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Kategori :</label>
                <select id="category_id" name="category_id" required class="@error('category_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>-- Pilih Kategori --</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $post->category->id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                @error('category_id')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="dusun_id" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Dusun : (lokasi dilaksanakan)</label>
                <select id="dusun_id" name="dusun_id" class="@error('dusun_id') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected disabled>-- Pilih Dusun --</option>
                    @foreach ($dusuns as $dusun)
                    <option value="{{ $dusun->id }}" {{ old('dusun_id', $post->dusun->id) == $dusun->id ? 'selected' : '' }}>
                        {{ $dusun->name }}
                    </option>
                    @endforeach
                </select>
                @error('dusun_id')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            
            <div>
                <label for="image" class="block text-xl font-semibold text-gray-900 dark:text-white">Gambar :</label>
                <input type="hidden" id="oldImage" name="oldImage" value="{{ $post->image }}">
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
                    {{-- <img class="img-preview "> --}}
                    <div id="preview-container" class="w-full sm:w-1/2 mb-4 sm:mb-0">
                        @if ($post->image)
                            <img src="{{ asset($post->image ) }}" alt="">
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
                <label for="image_description" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Keterangan Gambar :</label>
                <input type="text" id="image_description" name="image_description" autocomplete="off" value="{{ old('image_description', $post->image_description) }}" required class="@error('image_description') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('image_description')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label for="body" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Isi Berita :</label>
                <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                <trix-editor class="trix-editor" input="body"></trix-editor>
                @error('body')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            {{-- <div>
                <label for="body" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Isi Berita :</label>
                <textarea id="body" name="body" class="@error('body') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="6">{{ old('body', $post->body) }}</textarea>
                @error('body')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div> --}}

            <div>
                <button type="submit" class="px-2 py-3 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">                     
                    <svg class="w-6 h-6 mr-2 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7.414A2 2 0 0 0 20.414 6L18 3.586A2 2 0 0 0 16.586 3H5Zm3 11a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v6H8v-6Zm1-7V5h6v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M14 17h-4v-2h4v2Z" clip-rule="evenodd"/>
                    </svg>                      
                    Simpan Perubahan
                </button>
            </div>

        </div>

    </form>

    <script>
        const dropzoneFile = document.getElementById('image');
        const previewContainer = document.getElementById('preview-container');
    
        dropzoneFile.addEventListener('change', function(event) {
            previewContainer.innerHTML = ''; // Clear previous previews
    
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('max-w-full', 'h-auto', 'rounded-lg'); // Add any styling classes you want
                    previewContainer.appendChild(img);
                }
                reader.readAsDataURL(file);
    
                // Show the "Pilih Gambar Lagi" button
                changeImageBtn.classList.remove('hidden');
            }
        });

        // document.addEventListener('trix-file-accept', function(e){
        //     e.preventDefault();
        // });

        // const title = document.querySelector('#title');
        // const slug = document.querySelector('#slug');

        // title.addEventListener('change', function(){
        //     fetch('/dashboard/posts/checkSlug?title=' + title.value)
        //     .then(response => response.json())
        //     .then(data => slug.value = data.slug)
        // });
        document.addEventListener('DOMContentLoaded', function() {
            const nameInput = document.getElementById('title');
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