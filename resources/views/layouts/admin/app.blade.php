<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Desa {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    <link type="image/png" href="{{ asset('landing/images/logo-gorut.png') }}" rel="icon">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.admin.navigation')
        @include('layouts.admin.sidebar')



        <!-- Page Content -->
        <main class="px-2 ps-0 md:ps-64">
            {{ $slot }}
        </main>
    </div>
    @include('layouts.admin.footer')
    @stack('before-scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

    <script>
        // Pastikan data tema sudah tersedia
        document.documentElement.style.setProperty('--primary-color', '{{ $theme->primary ?? '#8c2626' }} ');
        document.documentElement.style.setProperty('--secondary-color', '{{ $theme->secondary ?? '#878787' }}');
    </script>
    @stack('after-scripts')
</body>


</html>
