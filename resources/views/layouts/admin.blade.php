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

        {{-- Font Awesome --}}
        <script src="https://kit.fontawesome.com/8c4fa2aded.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-50">
        <x-banner />

        @php
            $links = [
                [
                    'title' => 'Dashboard',
                    'url' => route('admin.dashboard'),
                    'active' => request()->routeIs('admin.dashboard'),
                    'icon' => 'fa-solid fa-gauge'
                ]
            ];
        @endphp

        <div class="flex" x-data="{ 
            open: false,
            openSidebar: true
        }">

            {{-- Side Bar --}}
            <div :class="{
                'lg:block': openSidebar,
            }" class="w-64 shrink-0 hidden lg:block">

                @include('layouts.partials.admin.sidebar')

            </div>

            
            <div class="flex-1">
                {{-- Nav Bar --}}    
                @include('layouts.partials.admin.navigation')
                {{-- Content --}}
                <div>
                    {{ $slot }}
                </div>
            </div>
        </div>


        @stack('modals')

        @livewireScripts
    </body>
</html>
