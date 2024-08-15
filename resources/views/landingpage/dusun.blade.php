<x-layout>
  <x-slot:title>{{ $title . " " . $dusun->name }}</x-slot:title>
  <x-slot:dusuns>{{ $dusuns }}</x-slot:dusuns>

  <div class="container mx-auto px-4 py-2 bg-gray-200 rounded-lg">

    <div class="w-full text-center pt-6">
      <h1 class="text-4xl font-semibold font-serif mb-4">Tentang Dusun {{ $dusun->name }}</h1>
    </div>

    <div class="flex flex-col items-center justify-start space-y-6 p-4 font-serif">
      <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-32 items-start">
        <!-- Div untuk gambar dan teks -->
        <div class="flex flex-col items-center italic w-full md:w-auto">
          <img class="w-full max-w-xs md:max-w-lg" 
          @if ($dusun->image)
          src="{{ asset($dusun->image ) }}"
          @else
          src="{{ asset('img/lokasi/kaling.jpg') }}" 
          @endif
          alt="Kaling">
          Gambar : 
          @if ($dusun->description)
          {{ $dusun->description }}
          @else
          Gapura Dusun
          @endif
        </div>

        <!-- Tabel informasi -->
        <div class="bg-white shadow-md rounded-lg p-4 w-full md:w-auto">
          <table class="w-full">
            <thead>
              <tr>
                <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Keterangan</th>
                <th class="border-b-2 border-gray-300 py-2 px-4 text-left">Informasi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border-b py-2 px-4">Kepala Dusun</td>
                <td class="border-b py-2 px-4 hover:text-blue-600 hover:underline">{{ $dusun->kadus }}</td>
              </tr>
              <tr>
                <td class="border-b py-2 px-4">Jumlah RW</td>
                <td class="border-b py-2 px-4 hover:text-blue-600 hover:underline">{{ $dusun->rw }}</td>
              </tr>
              <tr>
                <td class="border-b py-2 px-4">Jumlah RT</td>
                <td class="border-b py-2 px-4 hover:text-blue-600 hover:underline">{{ $dusun->rt }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <div style="all: unset; font-family: inherit; margin-top: 16px; font-size:large;  text-align: justify;">
      {!! $dusun->latar_belakang !!}
    </div>

    <!-- Menampilkan posts yang terkait dengan dusun -->
    <div class="mt-8">
      <h2 class="text-2xl font-bold mb-4">Update di dusun {{ $dusun->name }}</h2>

      <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-0">
          <!-- Container untuk grid posts -->
          <div id="post-container" class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">

              @forelse ($posts->take(3) as $post)

                  <article class="min-w-[300px] p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-hidden relative post-item">
                      <div class="flex justify-between items-center mb-3 text-gray-500">
                          <a href="/posts?category={{ $post->category->slug }}" class="hover:underline">
                              <span class="{{ $post->category->color }} text-primary-800 text-sm font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                                  {{ $post->category->name }}
                              </span>
                          </a>
                      </div>
                      <a href="/posts/{{ $post->slug }}" class="hover:underline">
                          <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h2>
                      </a>
                      <span class="text-sm">{{ $post->updated_at->format('d/m/Y') }} | {{ $post->updated_at->diffForHumans() }}</span>
                      @if ($post->image)
                          <img class="w-full h-48 object-cover object-center mt-2" src="{{ asset('storage/' . $post->image) }}">
                      @endif
                      <p class="py-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post->body, 150) }}</p>
                      <div class="flex justify-end items-center">
                          <a href="/posts/{{ $post->slug }}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                              Read more
                              <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                              </svg>
                          </a>
                      </div>
                  </article>

                @empty

                <div>
                  <p class="font-semibold text-xl">Article not Found !</p>
                </div>
        
                @endforelse

          </div>

          @if ($posts->count() > 3)
              <div class="text-center mt-6">
                  <button id="load-more" class="bg-primary-600 text-white font-semibold py-2 px-4 rounded hover:bg-primary-700">
                    &darr;  Tampilkan lebih banyak
                  </button>
              </div>
          @endif
      </div>
    </div>

  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
        let posts = @json($posts->skip(3)->values());
        let postContainer = document.getElementById('post-container');
        let loadMoreButton = document.getElementById('load-more');
        let currentIndex = 0;
        const postsPerLoad = 3;

        loadMoreButton.addEventListener('click', function () {
            let nextPosts = posts.slice(currentIndex, currentIndex + postsPerLoad);
            nextPosts.forEach(post => {
                let article = document.createElement('article');
                article.classList.add('min-w-[300px]', 'p-6', 'bg-white', 'rounded-lg', 'border', 'border-gray-200', 'shadow-md', 'dark:bg-gray-800', 'dark:border-gray-700', 'overflow-hidden', 'relative', 'post-item');
                
                article.innerHTML = `
                    <div class="flex justify-between items-center mb-3 text-gray-500">
                        <a href="/posts?category=${post.category.slug}" class="hover:underline">
                            <span class="${post.category.color} text-primary-800 text-sm font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800 hover:underline">
                                ${post.category.name}
                            </span>
                        </a>
                    </div>
                    <a href="/posts/${post.slug}" class="hover:underline">
                        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">${post.title}</h2>
                    </a>
                    <span class="text-sm">${new Date(post.updated_at).toLocaleDateString()} | ${new Date(post.updated_at).toLocaleTimeString()}</span>
                    ${post.image ? `<img class="w-full h-48 object-cover object-center mt-2" src="{{ asset('storage/') }}/${post.image}">` : ''}
                    <p class="py-5 font-light text-gray-500 dark:text-gray-400">${post.body.length > 150 ? post.body.substr(0, 150) + '...' : post.body}</p>
                    <div class="flex justify-end items-center">
                        <a href="/posts/${post.slug}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                `;
                postContainer.appendChild(article);
            });

            currentIndex += postsPerLoad;

            if (currentIndex >= posts.length) {
                loadMoreButton.style.display = 'none';
            }
        });
    });
  </script>

</x-layout>