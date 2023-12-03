<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Calvary Crystal Church') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body x-data="{ open: false }" class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100 w-full">

    <!-- Page Heading -->
    @if (isset($header))
        <header class="w-full">
            {{ $header }}
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    <!--Footer-->
    <x-footer />
</body>

</html>
