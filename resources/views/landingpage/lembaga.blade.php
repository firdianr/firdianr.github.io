<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:dusuns>{{ $dusuns }}</x-slot:dusuns>
    
    <section class="bg-gray-200 rounded-lg dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-6 ">
            <a href="/lembagas" class="font-medium text-xl text-blue-600 hover:underline">&laquo; Kembali</a>

            <div class="items-start p-8 mt-4 bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full sm:w-1/4">
                    <img class="w-full sm:w-64 rounded-lg sm:rounded-none sm:rounded-l-lg"
                    @if ($lembaga->image)
                        src="{{ asset($lembaga->image ) }}"
                    @else
                        src="{{ asset('img/logo/karanganyar.png') }}"
                    @endif
                        alt="Bonnie Avatar">
                </div>
                <div class="p-5 sm:ml-4 sm:w-3/4">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-8">
                        {{ $lembaga->name }}
                    </h3>
            
                    <div style="all: unset; font-family: inherit; text-align: justify; font-size:large">
                        {!! $lembaga->description !!}
                    </div>
                </div>
            </div>

        </div>
    </section>

</x-layout>