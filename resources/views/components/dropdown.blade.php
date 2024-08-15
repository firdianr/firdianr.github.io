@props(['title' => ''])

<div x-data="{ open: false }" class="relative">
    <button @click="open = !open" class="{{ request()->is('/dusun*') ? 'bg-gray-100 text-gray-800 ' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} 
            block px-3 py-3 text-lg font-semibold
            {{ request()->is('/dusun*') ? 'border-b-4 border-gray-400' : 'hover:border-b-2 hover:border-gray-400' }} w-full text-left">
        {{ $title }}
        <svg class="inline-block w-4 h-4 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>
    <div x-show="open" @click.away="open = false" class="mt-2 w-full shadow-lg bg-gray-700">
        {{ $slot }}
    </div>
</div>