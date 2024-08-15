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
        <h1 class="text-xl font-bold">Kategori Berita</h1>
    </div>

    <div class="py-2 px-4 ml-auto mr-4 max-w-screen-xl lg:py-2 lg:px-0">
      <a href="/dashboard/categories/create" type="button" class="pl-2 pr-3 py-2.5 text-sm font-medium text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-4 h-4 text-white dark:text-white mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
        </svg>        
        Tambah Kategori
      </a>
    </div>
  
    <div class="py-2 px-4 ml-auto mr-4 max-w-screen-xl lg:py-2 lg:px-0">
        <div class="relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
  
                    @forelse ($categories as $category)
              
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $category->name }}
                        </th>
                        <td class="px-6 py-4 space-x-3 flex items-center">
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            
                            @php
                                $hasPosts = $category->posts()->count() > 0;
                            @endphp
                    
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="inline-block ml-3">
                                @method('delete')
                                @csrf
                                <button 
                                    onclick="return confirm('Yakin Hapus Kategori?')" 
                                    class="font-medium {{ $hasPosts ? 'text-gray-400 cursor-not-allowed' : 'text-red-600 dark:text-red-500 hover:underline' }}" 
                                    {{ $hasPosts ? 'disabled' : '' }}>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
              
                    @empty
              
                    <div>
                      <p class="font-semibold text-xl my-4">Categories not Found !</p>
                    </div>
              
                    @endforelse
                    
                </tbody>
            </table>
        </div>
      </div>  
    </div>
    
</x-dashboard-layout>