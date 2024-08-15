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

            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <tbody>

                            @forelse ($hukums as $hukum)
                            
                            <tr class="border-b-4 border-gray-600  dark:border-gray-700 hover:bg-gray-200">
                                <th scope="row" class="px-4 py-8 text-xl font-semibold text-gray-900 whitespace-nowrap dark:text-white">{{ $hukum->name }}</th>
                                <td class="px-4 py-8 flex items-center justify-end">
                                    <a href="/hukums/{{ $hukum->slug }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Detail
                                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                                
                            @empty

                            <div>
                                <p class="font-semibold text-xl my-4">Content not Found !</p>
                            </div>
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-layout>