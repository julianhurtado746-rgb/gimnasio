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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
    body { background-color: #F2EFE9 !important; color: #3A3A3A !important; }
    header { background-color: #FFFFFF !important; }
    header h2 { color: #4A4A4A !important; font-weight: 800; }
    .bg-white { background-color: #FFFFFF !important; color: #3A3A3A !important; border: 1px solid #E6DDD3; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); }
    input, select, textarea { background-color: #FAF8F5 !important; color: #3A3A3A !important; border: 1px solid #D8CFC4 !important; border-radius: 10px !important; }
    label { color: #7A6A5E !important; font-weight: 600; }
    button { background-color: #D9A679 !important; color: white !important; font-weight: 600 !important; border-radius: 10px !important; border: none !important; }
    a { color: #A97C50 !important; }
    th { color: #7A6A5E !important; }
</style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
