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
        <h2 class="font-semibold text-xl text-zinc-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('settings.update', 0) }}" method="post" class="w-full">
                    @csrf
                    @method('PUT')

                    <div class="px-6 pt-6 text-zinc-800 dark:text-white">
                        <h2 class="text-2xl">Configurações</h2>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-2">
                            <label for="first_name"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Site name</label>
                            <input type="text" id="first_name"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="John" required/>
                        </div>
                        <div class="col-span-2">
                            <label for="first_name"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Seo title</label>
                            <input type="text" id="first_name"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="John" required/>
                        </div>
                        <div class="col-span-2">
                            <label for="first_name"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Seo description</label>
                            <input type="text" id="first_name"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="John" required/>
                        </div>
                    </div>

                    <div class="flex justify-end pr-6 pb-6">
                        <x-button>Salvar</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
