<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="flex min-h-screen">
        <!-- Left Side -->
        <div class="flex w-1/2 items-center justify-center bg-primary p-8 text-white max-md:hidden">
            <div class="text-center">
                <h1 class="text-7xl font-bold">Selamat Datang Di Website Resmi Desa <span class="text-yellow-500">
                        {{ config('app.name') }}</span></h1>
            </div>
        </div>

        <!-- Right Side (Form) -->
        <div class="flex w-1/2 flex-col items-center border bg-white pt-6 max-md:w-full sm:justify-center sm:pt-0">
            <main class="w-full max-w-md rounded-lg bg-white px-6 py-4 shadow-lg">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
