<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet"  href="{{ asset('vendors/feather/feather.css') }}">
        <link rel="stylesheet"  href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
        <link rel="stylesheet"  href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet"  href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
        <link rel="shortcut icon"  href="{{ asset('images/favicon.png') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-1 sm:pt-0 bg-gray-100">

            <div class=" w-4/5 sm:max-w-md px-6 py-0 bg-white shadow-md overflow-hidden sm:rounded-lg top-0">
                {{ $slot }}
            </div>
        </div>







         <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
         <script src="{{ asset('js/off-canvas.js') }}"></script>
         <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
         <script src="{{ asset('js/template.js') }}"></script>
         <script src="{{ asset('js/settings.js') }}"></script>
         <script src="{{ asset('js/todolist.js') }}"></script>
    </body>

</html>
