@props(['active' => false])

<a {{ $attributes }}
   class="{{ $active ? 'bg-gray-100 text-gray-800 ' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}} 
   block px-3 py-3 text-lg font-semibold
   {{ $active ? 'border-b-4 border-gray-400' : 'hover:border-b-2 hover:border-gray-400' }}" 
   aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>
