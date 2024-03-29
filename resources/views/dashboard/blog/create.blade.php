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
                        <div class="col-span-2">
                            <label for="title"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Título</label>
                            <input type="text" id="title" name="title" value="{{ $blog->title ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   required/>
                        </div>
                        <div class="col-span-2">
                            <label for="subtitle"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Subtítulo</label>
                            <input type="text" id="subtitle" name="subtitle" value="{{ $blog->subtitle ?? '' }}"
                                   class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                   required/>
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                   class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Descrição</label>
                            <x-trix-input value="{!!  $blog->description->toTrixHtml() ?? '' !!}"
                                          class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                          id="description" name="description" value=""/>
                        </div>

                        @isset($blog)
                            <livewire:components.modals.category-modal :model="$blog"/>

                            <livewire:components.modals.tag-modal :model="$blog"/>
                        @endisset


                        @isset($blog)
                            <div class="col-span-2">
                                <label for="slug"
                                       class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Slug</label>
                                <input type="text" id="slug" name="slug" disabled value="{{ $blog->slug }}"
                                       class="disabled bg-zinc-200 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       required/>
                            </div>
                        @endisset
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
