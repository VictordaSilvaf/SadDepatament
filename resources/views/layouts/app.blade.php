<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @yield('head')

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <x-rich-text::styles theme="richtextlaravel" data-turbo-track="false"/>
</head>
<body class="font-sans antialiased">

<x-banner/>

<div class="min-h-screen bg-zinc-100 dark:bg-zinc-700">
    @livewire('navigation-menu')

    <x-global.aside/>

    <!-- Page Content -->
    <main class="pl-0 lg:pl-80 pt-24 max-h-screen overflow-y-auto">
        {{ $slot }}
    </main>
</div>

@stack('modals')

@livewireScripts
</body>
</html>
