<x-app-layout>
    @section('head')
        <title>{{ $settings['seo_title'] ?? 'Dashboard - Formulário' }}</title>
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-white leading-tight">
            {{ __('Categorias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form enctype="multipart/form-data"
                      action="{{ isset($category) ? route('categories.update', $category) : route('categories.store') }}"
                      method="post"
                      class="w-full">
                    @csrf
                    @isset($category)
                        @method('PUT')
                    @endisset

                    <div class="px-6 pt-6 text-zinc-800 dark:text-white">
                        <h2 class="text-2xl">Categorias</h2>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="grid grid-cols-3 col-span-2 gap-x-4">
                            <div class="col-span-2">
                                <label for="title"
                                       class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                                <input type="text" id="title" name="title" value="{{ $category->title ?? '' }}"
                                       class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                />
                                @error('title')
                                <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                                @enderror
                            </div>

                            <div class="col-span-1">
                                <label for="color"
                                       class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Cor</label>
                                <select id="color" name="color"
                                        class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option selected>
                                        Selecione a cor tags
                                    </option>
                                    @foreach(['dark', 'red', 'green', 'yellow', 'indigo', 'purple', 'pink', 'default'] as $color)
                                        <option {{ isset($category) ?? $category->color == $color ? 'selected' : '' }}
                                                value="{{ $color }}">{{ __(ucfirst($color)) }}</option>
                                    @endforeach
                                </select>

                                @error('color')
                                <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-span-2">
                            <label for="description"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Descrição</label>
                            <x-trix-input value="{!!  $category->description->toTrixHtml() ?? '' !!}"
                                          class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          id="description" name="description" value=""/>
                            @error('description')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="image"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagem</label>
                            <livewire:dashboard.components.form.file-input :image="$category->image ?? null"/>
                            @error('image')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        @isset($category)
                            <div class="col-span-2">
                                <label for="slug"
                                       class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Slug</label>
                                <input type="text" id="slug" name="slug" disabled value="{{ $category->slug ?? '' }}"
                                       class="disabled bg-zinc-200 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       required/>
                            </div>
                        @endisset
                    </div>

                    <div class="flex justify-end pr-6 pb-6 gap-x-6">
                        <a href="{{ route('categories.index') }}">
                            <x-button type="button">Cancelar</x-button>
                        </a>

                        <x-button>Salvar</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
