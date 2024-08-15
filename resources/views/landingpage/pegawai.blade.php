<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:dusuns>{{ $dusuns }}</x-slot:dusuns>

    <section class="bg-gray-200 rounded-lg dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">

            <div class="items-center justify-center rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <div class="w-1/4">
                    <img class="w-full sm:ml-16 sm:w-32 rounded-lg sm:rounded-none sm:rounded-l-lg"src="{{ asset('img/logo/karanganyar.png') }}" alt="Karanganyar">
                </div>
                <div class="px-12 py-4 sm:ml-4 w-3/4">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Pemerintah Desa Kaling</h2>
                    <p class="font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Daftar informasi pegawai dan perangkat desa Kaling</p>
                </div>
            </div>
                
            <hr class="w-full bg-gray-500 h-2 mb-8 rounded-lg">

            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-1">
                @foreach ($pegawais as $pegawai)

                <div class="items-start bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <div>
                        <img class="w-full sm:w-64 rounded-lg sm:rounded-none sm:rounded-l-lg"
                        @if ($pegawai->image)
                            src="{{ asset('storage/' . $pegawai->image ) }}"
                        @else
                            src="{{ asset('img/logo/karanganyar.png') }}"
                        @endif
                         alt="Bonnie Avatar">
                    </div>
                    <div class="p-12 sm:ml-4">
                        <h3 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $pegawai->jabatan }}
                        </h3>
                        <hr class="w-full bg-gray-500 h-1 mt-4 mb-3 rounded-lg">
                        <div class="mt-6 text-2xl font-medium text-gray-500 dark:text-gray-400">
                            {{ $pegawai->nama }}
                        </div>
                    </div>
                </div>
                
                <hr class="w-full bg-gray-500 h-0.5 my-4 rounded-lg">
                    
                @endforeach
            </div>  

        </div>
    </section>
</x-layout>