@props(['dusuns'])

<nav class="bg-gray-800 sticky top-0 z-50" x-data="{ isOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-3 lg:px-2">
    <div class="flex h-fit items-center justify-between">
      <div class="flex items-end">
        <a href="/" class="flex items-center p-4 bg-gray-800 rounded-md cursor-pointer">
          <img class="h-12 mr-2" src="{{ asset('img/logo/karanganyar.png') }}" alt="Karanganyar">
          <div>
            <h1 class="text-2xl font-bold tracking-tight text-white">Desa Kaling</h1>
          </div>
        </a>        

        <div class="hidden md:block">
          <div class="ml-12 flex items-baseline space-x-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-nav-link href="/" :active="request()->is('/')">Profil Desa</x-nav-link>
            <x-nav-link href="/kepegawaian" :active="request()->is('kepegawaian')">Perangkat Desa</x-nav-link>
            <x-nav-link href="/lembagas" :active="request()->is('lembagas*')">Lembaga</x-nav-link>

            <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" class="relative inline-block text-left">
              <x-nav-link href="#" :active="request()->is('dusuns*')">
                  <div class="inline-flex items-center">
                      Dusun
                      <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.94l3.72-3.75a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0l-4.25-4.25a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
                      </svg>
                  </div>
              </x-nav-link>
          
              <div x-show="open" x-transition:enter="transition ease-out duration-100"
                   x-transition:enter-start="opacity-0 scale-95"
                   x-transition:enter-end="opacity-100 scale-100"
                   x-transition:leave="transition ease-in duration-75"
                   x-transition:leave-start="opacity-100 scale-100"
                   x-transition:leave-end="opacity-0 scale-95"
                   class="absolute left-0 z-10 mt-2 w-48 origin-top-left rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                  <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                      @foreach($dusuns as $dusun)
                          <a href="/dusuns/{{ $dusun->slug }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-200" role="menuitem">{{ $dusun->name }}</a>
                      @endforeach
                  </div>
              </div>
          </div>

            <x-nav-link href="/posts" :active="request()->is('posts*')">Berita</x-nav-link>
            {{-- <x-nav-link href="/hukums" :active="request()->is('hukums*')">Produk Hukum</x-nav-link> --}}
          </div>
        </div>
      </div>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          @auth
            <!-- Profile dropdown -->
            <div class="relative ml-3" x-data="{ open: false }">
              <div>
                <button @click="open = !open" type="button" class="relative flex max-w-xs items-center rounded-full border-2 bg-gray-200 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="{{ asset('img/user/user.png') }}" alt="">
                </button>
              </div>

              <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-100 transform" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a> --}}
                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="flex items-center px-4 py-2 text-sm text-red-600" role="menuitem" tabindex="-1" id="logout">
                    <svg class="w-5 h-5 mr-2 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                    </svg>
                    Log Out
                  </button>                    
                </form>
              </div>
            </div>
          @else
            {{-- <a type="button" href="/login" class="flex items-center text-white border-2 border-solid border-white hover:bg-blue-800 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-1.5 text-center me-2 my-2">
              Login
              <svg class="w-6 h-6 ml-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
              </svg>
            </a>                        --}}
          @endauth
        </div>
      </div>

      <div class="-mr-2 flex md:hidden">
        <!-- Mobile menu button -->
        <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!-- Menu open: "block", Menu closed: "hidden" -->
            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div x-show="isOpen" class="md:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <x-nav-link href="/" :active="request()->is('/')">Profil Desa</x-nav-link>
      
      <x-dropdown title="Dusun">
        @foreach($dusuns as $dusun)
          <x-nav-link href="/dusuns/{{ $dusun->slug }}" :active="request()->is('dusuns/{{ $dusun->slug }}')">{{ $dusun->name }}</x-nav-link>
        @endforeach
      </x-dropdown>
      
      <x-nav-link href="/kepegawaian" :active="request()->is('kepegawaian')">Perangkat Desa</x-nav-link>
      <x-nav-link href="/lembagas" :active="request()->is('lembagas*')">Lembaga</x-nav-link>
      <x-nav-link href="/posts" :active="request()->is('posts*')">Berita</x-nav-link>
      {{-- <x-nav-link href="/hukums" :active="request()->is('hukums*')">Produk Hukum</x-nav-link> --}}
    </div>
    <div class="border-t border-gray-700 pb-3 pt-4">
      
      @auth

      <div class="flex items-center px-5">
        <div class="flex-shrink-0 bg-gray-200 rounded-full border-2">
          <img class="h-10 w-10 rounded-full" src="{{ asset('img/user/user.png') }}" alt="">
        </div>
        {{-- <div class="ml-3">
          <div class="text-base font-medium leading-none text-white">Tom Cook</div>
          <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
        </div>
        <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
          <span class="sr-only">View notifications</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0 1 18.6 14.6l.9-9A2 2 0 0 0 17.5 4h-11a2 2 0 0 0-2 2v7.582a2 2 0 0 0 1 1.732L7 17h5m3 4a3 3 0 1 1-6 0h6Z" />
          </svg>
        </button> --}}
      </div>
      <div class="mt-3 space-y-1 px-2">
        {{-- <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
        <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a> --}}
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-red-600 hover:bg-gray-700 hover:text-red-300">
            Log Out
          </button>                    
        </form>
      </div>
      
      @else

      {{-- <a href="/login" class=" flex rounded-md px-5 py-2 text-base font-medium text-white hover:bg-gray-700 hover:text-white">
        Login
        <svg class="w-6 h-6 ml-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
        </svg>
      </a>                       --}}

      @endauth
    </div>
  </div>
</nav>
