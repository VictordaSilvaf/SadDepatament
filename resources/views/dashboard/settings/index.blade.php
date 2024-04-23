<x-app-layout>
    @section('head')
        <title>{{ $setting['seo_title'] ?? '' }}</title>
        <link rel="canonical" href="{{ request()->url() }}">

        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="description" content="{{ $setting['seo_description'] ?? '' }}">
        <meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $setting['seo_title'] ?? '' }}">
        <meta property="og:description" content="{{ $setting['seo_description'] ?? '' }}">
        <meta property="og:url" content="{{ request()->url() }}">
        <meta property="og:site_name" content="{{ $setting['site_name'] ?? '' }}">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('settings.update', 1) }}" enctype="multipart/form-data" method="post" class="w-full">
                @csrf
                @method('PUT')

                <div class="bg-white flex-1 h-full dark:bg-zinc-800 overflow-hidden shadow-md sm:rounded-lg">
                    <div class="px-6 pt-6 text-zinc-800 dark:text-white">
                        <h2 class="text-2xl">Configurações</h2>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                                Título do site
                            </label>
                            <input type="text" id="title" name="title"
                                   value="{{ old('title') ?? old('title') ?? $setting->title ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder=""/>
                            @error('title')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-full">
                            <label for="description"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                                Descrição do site
                            </label>
                            <textarea id="description" name="description" rows="4"
                                      class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="">{{ old('title') ?? $setting->description ?? '' }}</textarea>
                            @error('description')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label for="author"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Autor</label>
                            <input type="text" id="author" name="author"
                                   value="{{ old('author') ?? $setting->author ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder=""/>
                            @error('author')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label for="email"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Email de
                                contato</label>
                            <input type="text" id="email" name="email"
                                   value="{{ old('email') ?? $setting->email ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder=""/>
                            @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <label for="logo"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Logo</label>
                            <livewire:dashboard.components.form.file-input name="logo"
                                                                           :image="$setting->logo ?? null"/>
                            @error('logo')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <div class="flex items-center mb-2">
                                <label for="keywords"
                                       class="block text-sm font-medium text-zinc-900 dark:text-white">
                                    Keywords</label>
                                <x-global.help-indicator title="Obrigatório"
                                                         description="Separe por virgula cada palavra <br>Máximo 40 palavras"/>
                            </div>
                            <textarea id="keywords" name="keywords" rows="4"
                                      class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="">{{ old('keywords') ?? $setting->keywords ?? '' }}</textarea>
                            @error('keywords')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-span-1">
                            <label for="city"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Cidade</label>
                            <input type="text" id="city" name="city" value="{{ old('city') ?? $setting->city ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder=""/>
                            @error('city')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-1">
                            <label for="state"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Estado</label>
                            <input type="text" id="state" name="state"
                                   value="{{ old('state') ?? $setting->state ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder="" minlength="2" maxlength="2"/>
                            @error('state')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="bg-white flex-1 h-full dark:bg-zinc-800 overflow-hidden shadow-md sm:rounded-lg mt-8">
                    <div class="px-6 pt-6 text-zinc-800 dark:text-white">
                        <h2 class="text-2xl">Dados de SEO</h2>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_seo"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Título do
                                site (SEO)</label>
                            <input type="text" id="title_seo" name="title_seo"
                                   value="{{ old('title_seo') ?? $setting->title_seo ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   placeholder=""/>
                            @error('title_seo')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-full">
                            <label for="description_seo"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                                Descrição do site (SEO)</label>
                            <textarea id="description_seo" name="description_seo" rows="4"
                                      class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="">{{ old('description_seo') ?? $setting->description_seo ?? '' }}</textarea>
                            @error('description_seo')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-span-full">
                            <div class="flex items-center mb-2">
                                <label for="keywords_seo"
                                       class="block text-sm font-medium text-zinc-900 dark:text-white">
                                    Keywords (SEO)</label>
                                <x-global.help-indicator title="Obrigatório"
                                                         description="Separe por virgula cada palavra <br>Máximo 40 palavras"/>
                            </div>
                            <textarea id="keywords_seo" name="keywords_seo" rows="4"
                                      class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                      placeholder="">{{ old('keywords_seo') ?? $setting->keywords_seo ?? '' }}</textarea>
                            @error('keywords_seo')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex justify-end pb-6 mt-8">
                    <x-button>Salvar</x-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
