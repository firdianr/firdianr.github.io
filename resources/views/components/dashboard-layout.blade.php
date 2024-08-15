<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-300">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        trix-toolbar .trix-button-group--file-tools {
            display: none;
        }
    </style>
    <title>{{ $title }}</title>
</head>
<body class="h-full">
    <div class="min-h-full flex">
        
        <x-dashboard-header></x-dashboard-header>
  
        <x-sidebar></x-sidebar>
  
        <main>
            <div class="ml-6 mt-24 sm:ml-72 sm:mt-20">
                {{ $slot }}
            </div>
        </main>  
    </div>
</body>
<script>
    const dropzoneFile = document.getElementById('image');
    const dropzoneMap = document.getElementById('map');
    const previewContainer = document.getElementById('preview-container');
    const previewMap = document.getElementById('preview-map');

    dropzoneFile.addEventListener('change', function(event) {
        previewContainer.innerHTML = ''; // Clear previous previews

        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('max-w-full', 'h-auto', 'rounded-lg'); // Add any styling classes you want
                previewContainer.appendChild(img);
            }
            reader.readAsDataURL(file);

            // Show the "Pilih Gambar Lagi" button
            changeImageBtn.classList.remove('hidden');
        }
    });

    dropzoneMap.addEventListener('change', function(event) {
        previewMap.innerHTML = ''; // Clear previous previews

        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('max-w-full', 'h-auto', 'rounded-lg'); // Add any styling classes you want
                previewMap.appendChild(img);
            }
            reader.readAsDataURL(file);

            // Show the "Pilih Gambar Lagi" button
            changeImageBtn.classList.remove('hidden');
        }
    });
</script>
</html>