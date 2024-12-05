<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bechir Ferjani') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('all.min.css') }}">
        <link rel="icon" type="image/x-icon" href="/img/logo.ico">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
<div class="bg-slate-200 dark:bg-slate-900 scroll-smooth">
        {{-- Header --}}
        <x-frontend.header></x-frontend.header>
        <main class="min-h-screen">
            {{ $slot }}
        </main>
        {{-- Footer --}}
        <x-frontend.footer></x-frontend.footer>
    </div>
</body>

</html>
