<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-600">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <title>{{ $title }}</title>
    <style>
      .fixed-top {
        position: sticky;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 30; /* Ensures it stays above other content */
      }

      .no-fixed {
        top: 0;
        left: 0;
        width: 100%;
        z-index: 30; /* Ensures it stays above other content */
      }

      .fixed-mid {
        position: sticky;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 20; /* Ensures it stays above other content */
      }
  
      .fixed-footer {
        position: sticky;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 10; /* Ensures it stays above other content */
      }
  
      .content {
        padding-top: 80px; /* Adjust according to your navbar and header height */
        padding-bottom: 60px; /* Adjust according to your footer height */
      }
    </style>
</head>
<body class="h-full">
  <div class="min-h-full">
    <x-navbar :dusuns="$dusuns"></x-navbar>
  
    {{-- <x-header>{{ $title }}</x-header> --}}

    <main>
      <div class="mx-auto max-w-7xl px-4 pt-6 pb-12 sm:px-6 lg:px-8">
        {{ $slot }}
      </div>
    </main>

    <x-footer></x-footer>
  </div>
</body>
</html>