<x-app-layout>
    @section('head')
        <title>{{ $settings['seo_title'] ?? 'Dashboard - Formulário' }}</title>
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-white leading-tight">
            {{ __('Blogs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ isset($blog) ? route('blogs.update', $blog) : route('blogs.store') }}"
                      method="post"
                      class="w-full">
                    @csrf
                    @isset($blog)
                        @method('PUT')
                    @endisset

                    <div class="px-6 pt-6 text-zinc-800 dark:text-white">
                        <h2 class="text-2xl">Blogs</h2>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="show_title"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="show_title" name="show_title" value="{{ $blog->show_title ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('show_title')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="show_description"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Descrição</label>
                            <x-trix-input value="{!! isset($blog->show_description) ? $blog->show_description : '' !!}"
                                          class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          id="show_description" name="show_description"/>
                            @error('show_description')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_1"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_1" name="title_1" value="{{ $blog->title_1 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_1')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="description_1"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Descrição</label>
                            <x-trix-input value="{!! isset($blog->show_description) ? $blog->description_1 : '' !!}"
                                          class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          id="description_1" name="description_1"/>
                            @error('description_1')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                        <div class="col-span-2">
                            <label for="image"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagem</label>
                            <livewire:dashboard.components.form.file-input name="image"
                                                                           :image="$blog->image ?? null"/>
                            @error('image')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_2"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_2" name="title_2" value="{{ $blog->title_2 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_2')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <label for="subtitle_2"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="subtitle_2" name="subtitle_2" value="{{ $blog->subtitle_2 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('subtitle_2')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="image_2"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagem</label>
                            <livewire:dashboard.components.form.file-input name="image_2"
                                                                           :image="$blog->image_2 ?? null"/>
                            @error('image_2')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="description_2"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Descrição</label>
                            <x-trix-input value="{!! isset($blog->show_description) ? $blog->description_2 : '' !!}"
                                          class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          id="description_2" name="description_2"/>
                            @error('description_2')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-2">
                            <label for="image_3"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagem</label>
                            <livewire:dashboard.components.form.file-input name="image_3"
                                                                           :image="$blog->image_3 ?? null"/>
                            @error('image_3')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="description_3"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Descrição</label>
                            <x-trix-input value="{!! isset($blog->show_description) ? $blog->description_3 : '' !!}"
                                          class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          id="description_3" name="description_3"/>
                            @error('description_3')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_4"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_4" name="title_4" value="{{ $blog->title_4 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_4')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="image_4"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagem</label>
                            <livewire:dashboard.components.form.file-input name="image_4"
                                                                           :image="$blog->image_4 ?? null"/>
                            @error('image_4')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="description_4"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Descrição</label>
                            <x-trix-input value="{!! isset($blog->show_description) ? $blog->description_4 : '' !!}"
                                          class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          id="description_4" name="description_4"/>
                            @error('description_4')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-end pr-6 pb-6 gap-x-6">
                        <a href="{{ route('blogs.index') }}">
                            <x-button type="button">Cancelar</x-button>
                        </a>

                        <x-button>Salvar</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
