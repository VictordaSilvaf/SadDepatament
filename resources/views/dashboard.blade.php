<x-app-layout>
    @section('head')
        <title>{{ $settings['seo_title'] ?? '' }}</title>
        <link rel="canonical" href="{{ request()->url() }}">

        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="description" content="{{ $settings['seo_description'] ?? '' }}">
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $settings['seo_title'] ?? '' }}">
        <meta property="og:description" content="{{ $settings['seo_description'] ?? '' }}">
        <meta property="og:url" content="{{ request()->url() }}">
        <meta property="og:site_name" content="{{ $settings['site_name'] ?? '' }}">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            </div>
        </div>
    </div>
</x-app-layout>
