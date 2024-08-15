<x-dashboard-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="py-2 px-4 mx-auto max-w-screen-xl lg:py-2 lg:px-2">

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

        <h1 class="text-xl font-bold">Kelola Informasi Lembaga Desa</h1>

    </div>

    <div class="py-2 px-4 ml-auto mr-4 max-w-screen-xl lg:py-2 lg:px-0">
        <a href="/dashboard/lembagas/create" type="button" class="pl-2 pr-3 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-4 h-4 text-white dark:text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>        
            Tambah Lembaga
        </a>
    </div>

    <section class="bg-gray-200 rounded-lg dark:bg-gray-900 mt-4">
        <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-4 lg:px-6 ">

            <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-1">
                @foreach ($lembagas as $lembaga)

                <div class="items-start bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
                    <div>
                        <img class="w-full sm:w-64 rounded-lg sm:rounded-none sm:rounded-l-lg"
                        @if ($lembaga->image)
                            src="{{ asset('storage/' . $lembaga->image ) }}"
                        @else
                            src="{{ asset('img/logo/karanganyar.png') }}"
                        @endif
                        alt="Bonnie Avatar">
                    </div>
                    <div class="p-5 sm:ml-4">
                        <h3 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                            {{ $lembaga->name }}
                        </h3>
                
                        <div class="mt-6 space-y-2 font-medium text-gray-500 dark:text-gray-400 w-96">
                            <p>{{ Str::limit($lembaga->description, 150) }}</p>
                        </div>

                        {{-- Menampilkan Tombol --}}
                        <div class="inline-flex space-x-4 mt-8">
                          <a href="/dashboard/lembagas/{{ $lembaga->slug }}/edit" class="inline-flex items-center shadow-md mb-4 px-4 py-2 bg-gray-300 text-gray-800 text-sm font-medium rounded hover:bg-gray-400 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                            </svg>
                            Edit
                          </a>
                          <form action="/dashboard/lembagas/{{ $lembaga->slug }}" method="POST">
                            @method('delete')
                            @csrf
                            <button onclick="return confirm('Yakin Hapus Lembaga Desa?')" class="inline-flex group items-center shadow-md mb-4 px-4 py-2 bg-gray-300 text-red-600 text-sm font-medium rounded hover:bg-red-600 hover:text-white dark:bg-gray-700 dark:hover:bg-gray-600 dark:hover:text-white">
                              <svg class="w-6 h-6 mr-2 text-red-600 dark:text-white group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                              </svg>
                              Delete
                            </button>
                          </form>
                        </div>
                    </div>
                </div>
                
                    
                @endforeach
            </div>  

        </div>
    </section>

</x-dashboard-layout>