@props(['active' => false])

<a {{ $attributes->merge(['class' => ($active ? 'bg-gray-300 text-black' : 'text-gray-500') . ' flex items-center p-2 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group']) }}>
    <svg class="w-5 h-5 dark:text-white {{ $active ? 'text-black' : 'group-hover:text-black group-hover:w-7 group-hover:h-7' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
        {{ $slot }}
    </svg>                          
    <span class="flex-1 ms-3 whitespace-nowrap {{ $active ? 'text-black font-semibold' : 'group-hover:text-black group-hover:font-semibold' }}">{{ $slot }}</span>
</a>
