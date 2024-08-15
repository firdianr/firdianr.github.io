<x-dashboard-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1 class="text-5xl mb-2 font-extrabold ml-8">{{ $title }}</h1>
    <p class="mb-8 ml-8">Halaman ini digunakan untuk mengubah isi profil desa yang sudah dibuat sebelumnya</p>

    <form method="POST" action="/dashboard/desas/{{ $desa->id }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="space-y-6 mr-4 mb-10 ml-8">
            <div>
                <label for="name" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Nama Desa :</label>
                <input type="text" id="name" name="name" value="{{ old('name', $desa->name) }}" required class="@error('name') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('name')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
    
            <div>
                <label for="negara" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Negara :</label>
                <input type="text" id="negara" name="negara" value="{{ old('negara', $desa->negara) }}" required class="@error('negara') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('negara')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
    
            <div>
                <label for="provinsi" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Provinsi :</label>
                <input type="text" id="provinsi" name="provinsi" value="{{ old('provinsi', $desa->provinsi) }}" required class="@error('provinsi') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('provinsi')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
    
            <div>
                <label for="kabupaten" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Kabupaten :</label>
                <input type="text" id="kabupaten" name="kabupaten" value="{{ old('kabupaten', $desa->kabupaten) }}" required class="@error('kabupaten') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('kabupaten')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
    
            <div>
                <label for="kecamatan" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Kecamatan :</label>
                <input type="text" id="kecamatan" name="kecamatan" value="{{ old('kecamatan', $desa->kecamatan) }}" required class="@error('kecamatan') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('kecamatan')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
    
            <div>
                <label for="kode_pos" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Kode Pos :</label>
                <input type="text" id="kode_pos" name="kode_pos" value="{{ old('kode_pos', $desa->kode_pos) }}" required class="@error('kode_pos') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('kode_pos')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>
            
            <div>
                <label for="latar_belakang" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Latar Belakang :</label>
                <textarea id="latar_belakang" name="latar_belakang" class="@error('latar_belakang') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" rows="6">{{ old('latar_belakang', $desa->latar_belakang) }}</textarea>
                @error('latar_belakang')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-xl font-semibold text-gray-900 dark:text-white">Gambar Halaman Depan :</label>
                <input type="hidden" id="oldImage" name="oldImage" value="{{ $desa->image }}">
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
                        @if ($desa->image)
                            <img src="{{ asset('storage/' .  $desa->image ) }}" alt="">
                        @else
                            <img src="{{ asset('img/lokasi/kaling.jpg') }}" alt="">
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
                <label for="description" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Deskripsi Gambar :</label>
                <input type="text" id="description" name="description" value="{{ old('description', $desa->description) }}" required class="@error('description') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('description')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>
            
            {{-- ##################################################################################################################################### --}}

            <h1 class="text-2xl mb-2 font-bold border-black border-b-4">Info Geografis</h1>

            <div>
                <label for="map" class="block text-xl font-semibold text-gray-900 dark:text-white">Gambar Peta Desa :</label>
                <input type="hidden" id="oldMap" name="oldMap" value="{{ $desa->map }}">
                <div class="flex flex-col sm:flex-row items-center justify-center w-full space-x-4 space-y-4">
                    <label for="map" class="flex flex-col items-center justify-center w-full sm:w-1/2 h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:border-gray-800 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Pilih/Ubah Gambar</span> | drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF</p>
                        </div>
                        <input id="map" name="map" type="file" class="@error('map') is-invalid @enderror hidden" accept="image/*" />
                    </label>
                    <div id="preview-map" class="w-full sm:w-1/2 mb-4 sm:mb-0">
                        @if ($desa->map)
                            <img src="{{ asset('storage/' .  $desa->map ) }}" alt="">
                        @else
                            <img src="{{ asset('img/map/peta-kaling-mini.jpg') }}" alt="">
                        @endif
                    </div>
                </div>
                @error('map')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
    
            <div>
                <label for="luas_wilayah" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Luas Wilayah : (hektar)</label>
                <input type="number" id="luas_wilayah" name="luas_wilayah" value="{{ old('luas_wilayah', $desa->luas_wilayah) }}" required class="@error('luas_wilayah') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('luas_wilayah')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
    
            <div>
                <label for="batas_utara" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Batas Utara :</label>
                <input type="text" id="batas_utara" name="batas_utara" value="{{ old('batas_utara', $desa->batas_utara) }}" required class="@error('batas_utara') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('batas_utara')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
    
            <div>
                <label for="batas_selatan" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Batas Selatan :</label>
                <input type="text" id="batas_selatan" name="batas_selatan" value="{{ old('batas_selatan', $desa->batas_selatan) }}" required class="@error('batas_selatan') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('batas_selatan')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
    
            <div>
                <label for="batas_timur" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Batas Timur :</label>
                <input type="text" id="batas_timur" name="batas_timur" value="{{ old('batas_timur', $desa->batas_timur) }}" required class="@error('batas_timur') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('batas_timur')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                
                <div>
                    <label for="batas_barat" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Batas Barat :</label>
                    <input type="text" id="batas_barat" name="batas_barat" value="{{ old('batas_barat', $desa->batas_barat) }}" required class="@error('batas_barat') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('batas_barat')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                
            {{-- ##################################################################################################################################### --}}

            <h1 class="text-2xl mb-2 font-bold border-black border-b-4">Info Demografis</h1>
            
            <div>
                <label for="jumlah_penduduk" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah Penduduk : (jiwa)</label>
                <input type="text" id="jumlah_penduduk" name="jumlah_penduduk" value="{{ old('jumlah_penduduk', $desa->jumlah_penduduk) }}" required class="@error('jumlah_penduduk') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('jumlah_penduduk')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>
            
            <div>
                <label for="jumlah_penduduk_laki_laki" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah Penduduk Laki-laki : (jiwa)</label>
                <input type="text" id="jumlah_penduduk_laki_laki" name="jumlah_penduduk_laki_laki" value="{{ old('jumlah_penduduk_laki_laki', $desa->jumlah_penduduk_laki_laki) }}" required class="@error('jumlah_penduduk_laki_laki') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('jumlah_penduduk_laki_laki')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>
            
            <div>
                <label for="jumlah_penduduk_perempuan" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah Penduduk Perempuan : (jiwa)</label>
                <input type="text" id="jumlah_penduduk_perempuan" name="jumlah_penduduk_perempuan" value="{{ old('jumlah_penduduk_perempuan', $desa->jumlah_penduduk_perempuan) }}" required class="@error('jumlah_penduduk_perempuan') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('jumlah_penduduk_perempuan')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>
            
            <div>
                <label for="jumlah_rw" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah RW :</label>
                <input type="text" id="jumlah_rw" name="jumlah_rw" value="{{ old('jumlah_rw', $desa->jumlah_rw) }}" required class="@error('jumlah_rw') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('jumlah_rw')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>
            
            <div>
                <label for="jumlah_rt" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah RT :</label>
                <input type="text" id="jumlah_rt" name="jumlah_rt" value="{{ old('jumlah_rt', $desa->jumlah_rt) }}" required class="@error('jumlah_rt') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('jumlah_rt')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>
            
            {{-- ##################################################################################################################################### --}}

            <h1 class="text-2xl mb-2 font-bold border-black border-b-4">Info Kependudukan</h1>
            
            <div>
                <label for="jumlah_kk" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah KK : (kk)</label>
                <input type="text" id="jumlah_kk" name="jumlah_kk" value="{{ old('jumlah_kk', $desa->jumlah_kk) }}" required class="@error('jumlah_kk') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('jumlah_kk')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>
            
            <div>
                <label for="wni_laki_laki" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah WNI Laki-laki : (jiwa)</label>
                <input type="text" id="wni_laki_laki" name="wni_laki_laki" value="{{ old('wni_laki_laki', $desa->wni_laki_laki) }}" required class="@error('wni_laki_laki') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('wni_laki_laki')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div>
                <label for="wni_perempuan" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah WNI Perempuan : (jiwa)</label>
                <input type="text" id="wni_perempuan" name="wni_perempuan" value="{{ old('wni_perempuan', $desa->wni_perempuan) }}" required class="@error('wni_perempuan') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('wni_perempuan')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div>
                <label for="wna_laki_laki" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah WNA Laki-laki : (jiwa)</label>
                <input type="text" id="wna_laki_laki" name="wna_laki_laki" value="{{ old('wna_laki_laki', $desa->wna_laki_laki) }}" required class="@error('wna_laki_laki') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('wna_laki_laki')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div>
                <label for="wna_perempuan" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah WNA Perempuan : (jiwa)</label>
                <input type="text" id="wna_perempuan" name="wna_perempuan" value="{{ old('wna_perempuan', $desa->wna_perempuan) }}" required class="@error('wna_perempuan') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('wna_perempuan')
                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <h1 class="text-2xl mb-2 font-bold border-black border-b-4">Jumlah Penduduk Berdasarkan Agama</h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            
                <!-- Islam -->
                <div>
                    <label for="islam" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah Islam : (jiwa)</label>
                    <input type="text" id="islam" name="islam" value="{{ old('islam', $desa->islam) }}" required class="@error('islam') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('islam')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
    
                <!-- Katholik -->
                <div>
                    <label for="katholik" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah Katholik : (jiwa)</label>
                    <input type="text" id="katholik" name="katholik" value="{{ old('katholik', $desa->katholik) }}" required class="@error('katholik') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('katholik')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
    
                <!-- Protestan -->
                <div>
                    <label for="protestan" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah Protestan : (jiwa)</label>
                    <input type="text" id="protestan" name="protestan" value="{{ old('protestan', $desa->protestan) }}" required class="@error('protestan') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('protestan')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
    
                <!-- Hindu -->
                <div>
                    <label for="hindu" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah Hindu : (jiwa)</label>
                    <input type="text" id="hindu" name="hindu" value="{{ old('hindu', $desa->hindu) }}" required class="@error('hindu') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('hindu')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
    
                <!-- Budha -->
                <div>
                    <label for="budha" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah Budha : (jiwa)</label>
                    <input type="text" id="budha" name="budha" value="{{ old('budha', $desa->budha) }}" required class="@error('budha') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('budha')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
    
                <!-- Lain-lain -->
                <div>
                    <label for="lain_lain" class="block mb-2 text-xl font-semibold text-gray-900 dark:text-white">Jumlah Lain-lain : (jiwa)</label>
                    <input type="text" id="lain_lain" name="lain_lain" value="{{ old('lain_lain', $desa->lain_lain) }}" required class="@error('lain_lain') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @error('lain_lain')
                    <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
    
            </div>


            {{-- ##################################################################################################################################### --}}
            
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

</x-dashboard-layout>