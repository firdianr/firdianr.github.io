<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>
<body class="h-full">
    <div class="min-h-full">
    <section class="bg-gray-800 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto min-h-screen">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full sm:max-w-md">
                    <a href="/dashboard" class="inline-flex items-center rounded-tl-lg rounded-br-lg text-xl font-semibold text-white dark:text-white hover:underline bg-primary-600 hover:bg-primary-700 px-6 sm:px-8 py-3">
                        &laquo; Kembali    
                    </a>
                </div>
                <div class="flex items-center mt-1 mb-2 px-6 py-2 sm:px-8">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('img/logo/karanganyar.png') }}" alt="logo" style="width: 50px; height: 60px;">
                    </div>
                    <div class="ml-4">
                        <span class="text-black text-xl font-semibold">Desa Kaling</span>
                    </div>
                </div>
                <div class="px-6 space-y-4 md:space-y-6 sm:px-8 pb-6">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Ubah Kata Sandi
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="/changepassword" method="POST">
                        @csrf
                        
                        <div class="relative">
                            <label for="current_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Sandi Sekarang :</label>
                            <input type="password" name="current_password" id="current_password" class="@error('current_password') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Password" required="">
                            <button type="button" onclick="togglePasswordVisibilityCurrent()" class="absolute right-1 top-10 pr-3 flex items-center justify-center text-sm leading-5">
                                <svg id="current_eye-icon" class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>                                  
                            </button>
                            @error('current_password')
                                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label for="new_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kata Sandi Baru :</label>
                            <input type="password" name="new_password" id="new_password" class="@error('new_password') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Password" required="">
                            <button type="button" onclick="togglePasswordVisibilityNew()" class="absolute right-1 top-10 pr-3 flex items-center justify-center text-sm leading-5">
                                <svg id="new_eye-icon" class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>                                  
                            </button>
                            @error('new_password')
                                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="relative">
                            <label for="new_password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Kata Sandi Baru :</label>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="@error('new_password_confirmation') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Password" required="">
                            <button type="button" onclick="togglePasswordVisibilityNewConfirm()" class="absolute right-1 top-10 pr-3 flex items-center justify-center text-sm leading-5">
                                <svg id="new_eye-icon_confirmation" class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                </svg>                                  
                            </button>
                            @error('new_password_confirmation')
                                <p id="helper-text-explanation" class="mt-2 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <button onclick="return confirm('Yakin Ubah Kata Sandi?')" type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Ubah Kata Sandi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
</body>
<script>
    function togglePasswordVisibilityCurrent() {
        const passwordInput = document.getElementById('current_password');
        const eyeIcon = document.getElementById('current_eye-icon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = '<path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/><path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>';
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>';
        }
    }

    function togglePasswordVisibilityNew() {
        const passwordInput = document.getElementById('new_password');
        const eyeIcon = document.getElementById('new_eye-icon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = '<path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/><path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>';
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>';
        }
    }

    function togglePasswordVisibilityNewConfirm() {
        const passwordInput = document.getElementById('new_password_confirmation');
        const eyeIcon = document.getElementById('new_eye-icon_confirmation');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.innerHTML = '<path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/><path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>';
        } else {
            passwordInput.type = 'password';
            eyeIcon.innerHTML = '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.933 13.909A4.357 4.357 0 0 1 3 12c0-1 4-6 9-6m7.6 3.8A5.068 5.068 0 0 1 21 12c0 1-3 6-9 6-.314 0-.62-.014-.918-.04M5 19 19 5m-4 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>';
        }
    }
</script>
</html>
