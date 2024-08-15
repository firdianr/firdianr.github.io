<x-dashboard-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-2">

      @if (session()->has('success'))

        <div id="alert-1" class="flex items-center p-6 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-medium font-medium">
                {{ session('success') }}
            </div>
              <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
        </div>

        @endif

        <h1 class="text-xl font-bold">Kelola Profil Desa</h1>
        
    </div>
        
    @foreach ($desas as $desa)

    <a href="/dashboard/desas/{{ $desa->id }}/edit" class="inline-flex items-center shadow-md mb-4 px-4 py-2 bg-gray-100 text-gray-800 text-sm font-medium rounded hover:bg-gray-200 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
        </svg>
        Edit
    </a>

    <div class="container mx-auto px-4 py-6 bg-gray-200">
        <div class="flex flex-col items-center justify-start space-y-6 p-4 font-serif">
          <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-32 items-start">
            <!-- Div untuk gambar dan teks -->
            <div class="flex flex-col items-center italic w-full md:w-auto">
              <img class="w-full max-w-xs md:max-w-lg" 
              @if ($desa->image)
              src="{{ asset('storage/' . $desa->image ) }}"
              @else
              src="{{ asset('img/lokasi/kaling.jpg') }}" 
              @endif
              alt="Kaling">
              Gambar : 
              @if ($desa->description)
              {{ $desa->description }}
              @else
              Kantor Kepala Desa Kaling
              @endif
            </div>
            
            <!-- Tabel informasi -->
            <div class="bg-white shadow-md rounded-lg p-4 w-full md:w-auto">
              <table class="w-full">
                <thead>
                  <tr>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Keterangan</th>
                    <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Informasi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="border-b py-2 px-4">Negara</td>
                    <td class="border-b py-2 px-4 hover:text-blue-600 hover:underline">{{ $desa->negara }}</td>
                  </tr>
                  <tr>
                    <td class="border-b py-2 px-4">Provinsi</td>
                    <td class="border-b py-2 px-4 hover:text-blue-600 hover:underline">{{ $desa->provinsi }}</td>
                  </tr>
                  <tr>
                    <td class="border-b py-2 px-4">Kabupaten</td>
                    <td class="border-b py-2 px-4 hover:text-blue-600 hover:underline">{{ $desa->kabupaten }}</td>
                  </tr>
                  <tr>
                    <td class="border-b py-2 px-4">Kecamatan</td>
                    <td class="border-b py-2 px-4 hover:text-blue-600 hover:underline">{{ $desa->kecamatan }}</td>
                  </tr>
                  <tr>
                    <td class="border-b py-2 px-4">Kode Pos</td>
                    <td class="border-b py-2 px-4 hover:text-blue-600 hover:underline">{{ $desa->kode_pos }}</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
             
          <p class="text-justify text-lg w-full">
            {{ $desa->latar_belakang }}
          </p>
    
          <div class="w-full text-left">
            <h1 class="text-xl font-semibold mb-4">Pembagian Wilayah</h1>
            <p class="text-justify text-lg mb-1">
              Desa Kaling terdiri dari 8 dusun. Dusun-dusun yang ada di desa Kaling antara lain:
            </p> 
            <ul class="list-disc pl-5 space-y-1 text-lg">
              <li>Celengan</li>
              <li>Cabeyan</li>
              <li>Getasan</li>
              <li>Kaling</li>
              <li>Kauman</li>
              <li>Jembangan</li>
              <li>Dukuh</li>
              <li>Geneng</li>
            </ul>
          </div>
    
          <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-8 w-full">
            <!-- Div untuk informasi geografis dan demografis -->
            <div class="w-full text-left md:w-2/3">
              <h1 class="text-xl font-semibold mb-4">Kondisi Geografis</h1>
              <p class="text-justify text-lg space-y-2 mb-2">
                <span class="inline-block w-64">Luas Wilayah</span>&nbsp; : {{ $desa->luas_wilayah }} hektar <br>
                <span class="inline-block w-64">Berbatasan dengan</span>
              </p> 
              <ul class="list-disc pl-5 space-y-2 mb-4 text-lg">
                <li><span class="inline-block w-60">Sebelah Utara</span> : {{ $desa->batas_utara }}</li>
                <li><span class="inline-block w-60">Sebelah Selatan</span> : {{ $desa->batas_selatan }}</li>
                <li><span class="inline-block w-60">Sebelah Timur</span> : {{ $desa->batas_timur }}</li>
                <li><span class="inline-block w-60">Sebelah Barat</span> : {{ $desa->batas_barat }}</li>
              </ul>
            
              <h1 class="text-xl font-semibold mb-4">Kondisi Demografis</h1>
              <p class="text-justify text-lg mb-4">
                <span class="inline-block w-64">Jumlah Penduduk</span>&nbsp; : {{ $desa->jumlah_penduduk }} jiwa <br>
                <span class="inline-block w-64">Jumlah Penduduk Laki-laki</span>&nbsp; : {{ $desa->jumlah_penduduk_laki_laki }} jiwa <br>
                <span class="inline-block w-64">Jumlah Penduduk Perempuan</span>&nbsp; : {{ $desa->jumlah_penduduk_perempuan }} jiwa <br>
                <span class="inline-block w-64">Jumlah RW</span>&nbsp; : {{ $desa->jumlah_rw }} RW <br>
                <span class="inline-block w-64">Jumlah RT</span>&nbsp; : {{ $desa->jumlah_rt }} RT
              </p>
            </div>        
          
            <!-- Gambar Peta -->
            <div class="w-full md:w-1/2 flex flex-col items-center justify-start italic pt-8">
              <img class="w-full md:max-w-md" 
              @if ($desa->map)
              src="{{ asset('storage/' . $desa->map ) }}"
              @else
              src="{{ asset('img/map/peta-kaling-mini.jpg') }}" 
              @endif
              alt="Peta Kaling">
              Gambar : Peta Desa Kaling
            </div>
          </div>
    
          <div class="w-full text-left">
            <h1 class="text-xl font-semibold mb-4">Kependudukan</h1>
    
            <p class="text-justify text-lg mb-2">
              <span class="inline-block w-72 sm:w-80">1. Jumlah Kepala Keluarga (KK)</span> : {{ $desa->jumlah_kk }} kk <br>
            </p> 
            
            <p class="text-justify text-lg mb-2">
              <span class="inline-block w-80">2. Penduduk menurut jenis kelamin</span><br>
            </p>
            <ul class="list-disc pl-6 space-y-2 mb-4 text-lg ml-3">
              <li><span class="inline-block w-44 sm:w-72">Jumlah laki-laki </span>: {{ $desa->jumlah_penduduk_laki_laki }} jiwa</li>
              <li><span class="inline-block w-44 sm:w-72">Jumlah Perempuan </span>: {{ $desa->jumlah_penduduk_perempuan }} jiwa</li>
            </ul>
            
            <p class="text-justify text-lg mb-2">
              <span class="inline-block w-full">3. Penduduk menurut Kewarganegaraan</span><br>
            </p>
            <ul class="list-disc pl-6 space-y-2 mb-4 text-lg ml-3">
              <li><span class="inline-block w-44 sm:w-72">WNI Laki-laki </span>: {{ $desa->wni_laki_laki }} jiwa</li>
              <li><span class="inline-block w-44 sm:w-72">WNI Perempuan </span>: {{ $desa->wni_perempuan }} jiwa</li>
              <li><span class="inline-block w-44 sm:w-72">WNA Laki-laki </span>: {{ $desa->wna_laki_laki }} jiwa</li>
              <li><span class="inline-block w-44 sm:w-72">WNA Perempuan </span>: {{ $desa->wna_perempuan }} jiwa</li>
            </ul>
    
            <p class="text-justify text-lg mb-2">
              <span class="inline-block w-80">4. Penduduk menurut Agama</span><br>
            </p>
            <ul class="list-disc pl-6 space-y-2 mb-4 text-lg ml-3">
              <li><span class="inline-block w-44 sm:w-72">Islam </span>: {{ $desa->islam }} jiwa</li>
              <li><span class="inline-block w-44 sm:w-72">Katholik </span>: {{ $desa->katholik }} jiwa</li>
              <li><span class="inline-block w-44 sm:w-72">Protestan </span>: {{ $desa->protestan }} jiwa</li>
              <li><span class="inline-block w-44 sm:w-72">Hindu </span>: {{ $desa->hindu }} jiwa</li>
              <li><span class="inline-block w-44 sm:w-72">Budha </span>: {{ $desa->budha }} jiwa</li>
              <li><span class="inline-block w-44 sm:w-72">Kepercayaan Terhadap Tuhan YME </span>: {{ $desa->lain_lain }} jiwa</li>
            </ul>
          </div>
          
          {{-- <div class="w-full text-left">
            <h1 class="text-xl font-semibold mb-4">Potensi SDM, dan SDA</h1>
          </div> --}}
    
        </div>  
    </div>
    
    @endforeach
    
</x-dashboard-layout>