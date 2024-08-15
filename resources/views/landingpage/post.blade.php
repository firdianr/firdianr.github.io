<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-slot:dusuns>{{ $dusuns }}</x-slot:dusuns>

  {{-- <article class="py-8 max-w-screen-md border-b border-gray-300">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div >
      By
      <a href="/authors/{{ $post->author->username }}" class="text-base text-gray-500 hover:underline">{{ $post->author->name }}</a> 
      in
      <a href="/categories/{{ $post->category->slug }}" class="text-base text-gray-500 hover:underline">{{ $post->category->name }}</a>
      | {{ $post->created_at->format('j F Y') }} | Updated {{ $post->updated_at->diffForHumans() }}
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts/" class="font-medium text-blue-500">&laquo; Back to posts</a>
  </article> --}}

  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased rounded-lg">
    <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="{{ url()->previous() }}" class="font-medium text-medium text-blue-600 hover:underline">&laquo; Kembali</a>
            <h1 class="mt-4 mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
            <address class="flex items-center my-6 not-italic">
              <div class="inline-flex items-start mr-3 text-sm text-gray-900 dark:text-white space-x-4">
                <div>
                  <h1 class="text-xl font-bold text-gray-900 dark:text-white">Penulis : {{ $post->writer }}</h1>
                  <span class="text-sm">Updated {{ $post->updated_at->format('d/m/Y') }} | {{ $post->updated_at->diffForHumans() }}</span>
                </div>
                <a href="/posts?category={{ $post->category->slug }}">
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

</x-layout>