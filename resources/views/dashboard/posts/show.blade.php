<x-dashboard-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="/dashboard/posts" class="font-medium text-medium text-blue-600 hover:underline">&laquo; Back to all posts</a>
            <h1 class="mt-4 mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
            <div class="inline-flex space-x-4">
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="inline-flex items-center shadow-md mb-4 px-4 py-2 bg-gray-300 text-gray-800 text-sm font-medium rounded hover:bg-gray-400 dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                </svg>
                Edit
              </a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                @method('delete')
                @csrf
                <button onclick="return confirm('Yakin Hapus Berita?')" class="inline-flex group items-center shadow-md mb-4 px-4 py-2 bg-gray-300 text-red-600 text-sm font-medium rounded hover:bg-red-600 hover:text-white dark:bg-gray-700 dark:hover:bg-gray-600 dark:hover:text-white">
                  <svg class="w-6 h-6 mr-2 text-red-600 dark:text-white group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                  </svg>
                  Delete
                </button>
              </form>
            </div>
            <address class="flex items-center my-6 not-italic">
              <div class="inline-flex items-start mr-3 text-sm text-gray-900 dark:text-white space-x-4">
                <div>
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white">Penulis : {{ $post->writer }}</h1>
                  <span class="text-sm">Updated {{ $post->updated_at->format('d/m/Y') }} | {{ $post->updated_at->diffForHumans() }}</span>
                </div>
                <a href="/dashboard/posts?category={{ $post->category->slug }}">
                  <span class="{{ $post->category->color }} text-primary-800 text-sm font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                    {{ $post->category->name }}
                  </span>
                </a>
              </div>
            </address>
          </header>

          @if ($post->image)
          <div class="flex flex-col w-full items-center justify-center space-y-0">
            <img class="w-1/2 mt-2" src="{{ asset('storage/' . $post->image ) }}">
            <p class="italic font-center font-serif">Gambar : {{ $post->image_description }}</p>
          </div>
          @endif

          <p class="lead text-black">{{ $post->body }}
          </p>
          <p class="text-md font-medium text-gray-600 dark:text-white italic">Editor : {{ $post->editor }}</p>
        </article>
    </div>
  </main>

</x-dashboard-layout>