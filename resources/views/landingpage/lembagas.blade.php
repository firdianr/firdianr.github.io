<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-slot:dusuns>{{ $dusuns }}</x-slot:dusuns>
  
  <div class="container mx-auto px-4 py-2 bg-gray-200 rounded-lg">

      <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:px-8">

            <div class="mx-auto mb-8 w-full lg:mb-8 text-left">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Lembaga Kemasyarakatan Desa</h2>
                <p class="mb-4 font-light text-gray-700 sm:text-xl dark:text-gray-400">
                  Lembaga Kemasyarakatan Desa (LKD) merupakan wadah partisipasi masyarakat, sebagai mitra Pemerintah Desa, ikut serta dalam perencanaan, pelaksanaan dan pengawasan pembangunan, serta meningkatkan pelayanan masyarakat Desa.
                </p>
            </div> 

            <hr class="w-full bg-gray-500 h-2 mb-8 rounded-lg">

            <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 text-center">
              @foreach ($lembagas as $lembaga)

              
              <div class="group text-center text-gray-500 dark:text-gray-400 p-5 shadow rounded-sm bg-gray-200 hover:bg-gray-300">
                <img class="mx-auto mb-4 w-36 rounded-lg" 
                @if ($lembaga->image)
                    src="{{ asset($lembaga->image ) }}"
                @else
                    src="{{ asset('img/logo/karanganyar.png') }}"
                @endif
                alt="Bonnie Avatar">
                <h3 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <a href="/lembagas/{{ $lembaga->slug }}">{{ $lembaga->name }}</a>
                </h3>
                <div class="flex justify-end items-center">
                  <a href="/lembagas/{{ $lembaga->slug }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                    Selengkapnya
                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
                </div>
              </div>
                
              @endforeach
            </div>  
            
        </div>
      </section>
      
  </div>
</x-layout>