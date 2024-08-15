<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:dusuns>{{ $dusuns }}</x-slot:dusuns>

    <section class="bg-gray-200 rounded-lg dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

            <!-- Header -->
            <div class="items-center justify-center rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full lg:w-1/6 flex justify-center items-center">
                    <img class="w-full sm:w-32 rounded-lg sm:rounded-none sm:rounded-l-lg"src="{{ asset('img/logo/karanganyar.png') }}" alt="Karanganyar">
                </div>
                <div class="px-12 py-4 sm:ml-4 lg:w-5/6">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pemerintah Desa Kaling</h2>
                    <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Daftar informasi peraturan yang ditetapkan di desa Kaling</p>
                </div>
            </div>

            <hr class="w-full bg-gray-500 h-2 mb-8 rounded-lg mt-8">

            <a href="{{ url()->previous() }}" class="font-medium text-xl text-blue-600 hover:underline">&laquo; Kembali</a>

            <!-- Konten dengan Tabel dan PDF -->
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-8 mt-8">

                <!-- Bagian Tabel -->
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div>
                        <h1 class="px-4 py-6 text-xl font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $hukum->name }}
                        </h1>
                    </div>
                        
                    <!-- Bagian PDF -->
                    @if ($hukum->file)
                    
                    <div class="relative overflow-hidden rounded-lg shadow-lg bg-white dark:bg-gray-800">
                        <h3 class="text-lg font-bold p-4 bg-gray-300 dark:bg-gray-700 text-gray-900 dark:text-white">Dokumen Terkait</h3>
                        <embed src="{{ asset('storage/' . $hukum->file ) }}" type="application/pdf" class="w-full h-svh" />
                    </div>
                        
                    @endif
                </div>

            </div>
        </div>
    </section>
</x-layout>
