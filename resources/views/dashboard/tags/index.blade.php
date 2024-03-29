<x-app-layout>
    @section('head')
        <title>{{ $settings['seo_title'] ?? 'Dasboard - Blogs' }}</title>
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-white leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-x-auto shadow-xl sm:rounded-lg">
                <div class="relative p-6 justify-center">
                    <h1 class="mb-6 text-2xl text-zinc-800 dark:text-white">{{ __('Tags') }}</h1>

                    <livewire:tables.tags-table/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
