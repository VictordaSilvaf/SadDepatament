<x-app-layout>
    @section('head')
        <title>{{ $settings['seo_title'] ?? 'Dashboard - Formulário' }}</title>
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-white leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form enctype="multipart/form-data"
                      action="{{ isset($home) ? route('dashboard.home.update', $home) : route('dashboard.home.store') }}"
                      method="post"
                      class="w-full">
                    @csrf
                    @isset($home)
                        @method('PUT')
                    @endisset

                    <div class="px-6 pt-6 text-zinc-800 dark:text-white">
                        <h2 class="text-2xl">Home</h2>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_1"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_1" name="title_1" value="{{ $home->title_1 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_1')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="description_1"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Descrição</label>
                            <x-trix-input value="{!!  $home->description_1 ?? '' !!}"
                                          class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          id="description_1" name="description_1"/>
                            @error('description_1')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="image_1"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagem</label>
                            <livewire:dashboard.components.form.file-input name="image_1" :image="$home->image_1 ?? null"/>
                            @error('image_1')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_2"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_2" name="title_2" value="{{ $home->title_2 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_2')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="description_2"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Descrição</label>
                            <x-trix-input value="{!!  $home->description_2 ?? '' !!}"
                                          class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          id="description_2" name="description_2"/>
                            @error('description_2')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <livewire:components.form.input-list :items="$home->items_2" title="Título" name="items_2"/>

                            @error('items_2')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="image_2"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagem</label>
                            <livewire:dashboard.components.form.file-input name="image_2" :image="$home->image_2 ?? null"/>
                            @error('image_2')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_3"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_3" name="title_3" value="{{ $home->title_3 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_3')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="description_3"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Descrição</label>
                            <x-trix-input value="{!!  $home->description_3 ?? '' !!}"
                                          class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          id="description_3" name="description_3"/>
                            @error('description_3')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <livewire:components.form.input-list type="2" :items="$home->items_3" title="Items"
                                                                 name="items_3"/>

                            @error('items_3')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="image_3"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagem</label>
                            <livewire:dashboard.components.form.file-input name="image_3" :image="$home->image_3 ?? null"/>
                            @error('image_3')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_4"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_4" name="title_4" value="{{ $home->title_4 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_4')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="images_4"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagens</label>
                            <livewire:components.global.image-uploader name="images_4" :base_images="$home->images_4 ?? null"/>
                            @error('images_4')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_5"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_5" name="title_5" value="{{ $home->title_5 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_5')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_6"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_6" name="title_6" value="{{ $home->title_6 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_6')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_7"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_7" name="title_7" value="{{ $home->title_7 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_7')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-full">
                            <livewire:components.form.input-list type="2" :items="$home->items_7" title="Items"
                                                                 name="items_7"/>

                            @error('items_3')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <div class="col-span-2">
                            <label for="image_7"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagem</label>
                            <livewire:dashboard.components.form.file-input name="image_7" :image="$home->image_7 ?? null"/>
                            @error('image_7')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-full">
                            <label for="title_8"
                                   class="block mb-2 text-sm font-medium dark:text-white">Título</label>
                            <input type="text" id="title_8" name="title_8" value="{{ $home->title_8 ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            />
                            @error('title_8')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-2 p-6 gap-4">
                        <div class="col-span-2">
                            <label for="image_9"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Imagem</label>
                            <livewire:dashboard.components.form.file-input name="image_9" :image="$home->image_9 ?? null"/>
                            @error('image_9')
                            <div class="text-red-400 dark:text-red-400">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-end pr-6 pb-6 gap-x-6">
                        <a href="{{ route('dashboard') }}">
                            <x-button type="button">Cancelar</x-button>
                        </a>

                        <x-button>Salvar</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
