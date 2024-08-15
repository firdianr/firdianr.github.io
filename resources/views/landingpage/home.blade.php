<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-slot:dusuns>{{ $dusuns }}</x-slot:dusuns>

  <div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="relative w-full h-96 overflow-hidden">
                <img src="{{ asset('img/lokasi/slide-1.jpg') }}" alt="Image 1" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>
    </div>
  </div>

  @foreach ($desas as $desa)
    
  <div class="container mx-auto px-4 py-2 bg-gray-200 rounded-b-lg z-10">
    
    <div class="w-full text-center pt-8">
      <h1 class="text-4xl font-semibold font-serif mb-4">Tentang Desa {{ $desa->name }}</h1>
    </div>

    <div class="flex flex-col items-center justify-start space-y-6 p-4 font-serif">
      <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-32 items-start">
        <!-- Div untuk gambar dan teks -->
        <div class="flex flex-col items-center italic w-full md:w-auto">
          <img class="w-full max-w-xs md:max-w-lg" 
          @if ($desa->image)
          src="{{ asset($desa->image ) }}"
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
         
      <div style="all: unset; font-family: inherit; margin-top: 16px; font-size:large;  text-align: justify;">
        {!! $desa->latar_belakang !!}
      </div>

      <div class="w-full text-left">
        <h1 class="text-xl font-semibold mb-4">Pembagian Wilayah</h1>
        <p class="text-justify text-lg mb-1">
          Desa Kaling terdiri dari {{ count($dusuns) }} dusun. Dusun-dusun yang ada di desa Kaling antara lain:
        </p> 
        <ul class="list-disc pl-5 space-y-1 text-lg">
          @foreach ($dusuns as $dusun)
            <li>{{ $dusun->name }}</li>
          @endforeach
        </ul>
      </div>

      <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-8 w-full">
        <!-- Div untuk informasi geografis dan demografis -->
        <div class="w-full text-left md:w-1/2">
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
          src="{{ asset($desa->map ) }}"
          @else
          src="{{ asset('img/map/peta-kaling-mini.jpg') }}" 
          @endif
          alt="Peta Kaling">
          Gambar : Peta Desa Kaling
        </div>
      </div>

      
      <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-8 w-full">
        <div class="w-full text-left md:w-1/2">
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

        <div class="w-full md:w-1/2 flex flex-col items-center justify-start italic pt-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15820.745320890745!2d110.92544717165849!3d-7.554651566387422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a19c6369c16d9%3A0x5027a76e356bce0!2sKaling%2C%20Kec.%20Tasikmadu%2C%20Kabupaten%20Karanganyar%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1723254936553!5m2!1sid!2sid" 
            class="w-full h-2/3 sm:max-w-md sm:max-h-md" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            Google Map : Desa Kaling
        </div>
      </div>
      
      {{-- <div class="w-full text-left">
        <h1 class="text-xl font-semibold mb-4">Potensi SDM, dan SDA</h1>
      </div> --}}
    

    </div>  
  </div>
  
  @endforeach

</x-layout>