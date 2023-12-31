<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet" />

    @include('components.config')

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="bg-white dark:bg-gray-900">
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-4 mx-auto md:h-screen lg:py-0">
            <a href="{{ route('home') }}"
                class="flex items-center mb-2 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-32 h-32 mr-2" src="{{ asset('logo.png') }}" alt="logo">
            </a>
            <h5 class="text-xl leading-tight tracking-tight text-gray-900 md:text-xl dark:text-white pb-4">
                Infrastruktur Air Minum Labura
            </h5>

            @yield('main')

        </div>
    </section>

    @include('components.toast')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>

    <script>
        // Menutup toast secara otomatis setelah 5 detik
        setTimeout(function() {
            var successToast = document.getElementById('toast-success');
            var errorToast = document.getElementById('toast-error');
            var warningToast = document.getElementById('toast-warning');

            if (successToast) {
                successToast.classList.add('hidden');
            }

            if (errorToast) {
                errorToast.classList.add('hidden');
            }

            if (warningToast) {
                warningToast.classList.add('hidden');
            }
        }, 5000);
    </script>

</body>

</html>
