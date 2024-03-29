<x-app-layout>
    @section('head')
        <title>{{ $settings['seo_title'] ?? '' }}</title>
    @endsection

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative flex flex-1 w-full p-6 justify-center flex-col">
                    <form action="{{ isset($user) ? route('users.update', $user) : route('users.store') }}"
                          method="POST" class="w-full">
                        @csrf
                        @isset($user)
                            @method('PUT')
                        @endisset

                        <div class="px-6 pt-6 text-zinc-800 dark:text-white">
                            <h2 class="text-2xl">Dados do usuário</h2>

                            <x-validation-errors class="mt-4"/>
                        </div>

                        <div class="grid grid-cols-2 p-6 gap-4">
                            <div class="col-span-1 mt-4">
                                <x-label for="name" value="{{ __('Name') }}"/>
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                         :value="old('name')" value="{{ $user->name ?? '' }}" required autofocus
                                         autocomplete="name"/>
                            </div>

                            <div class="mt-4 col-span-1">
                                <x-label for="email" value="{{ __('Email') }}"/>
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                         :value="old('email')" value="{{ $user->email ?? '' }}" required
                                         autocomplete="username"/>
                            </div>

                            <div class="mt-4 col-span-2">
                                <x-label for="password" value="{{ __('Password') }}"/>
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                         autocomplete="new-password"/>
                            </div>

                            <div class="mt-4 col-span-2">
                                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                         name="password_confirmation" autocomplete="new-password"/>
                            </div>

                            <div
                                class="mt-4 col-span-2 p-4 border border-zinc-300 rounded-md shadow-sm w-full flex gap-x-6 flex-wrap">
                                <div class="w-full mb-4">
                                    <h2 class="text-lg dark:text-white">Permissões do usuário</h2>
                                </div>

                                <div class="flex items-center">
                                    <input id="item_name" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-zinc-100 border-zinc-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-zinc-800 focus:ring-2 dark:bg-zinc-700 dark:border-zinc-600">
                                    <label for="item_name"
                                           class="ms-2 text-sm font-normal text-zinc-900 dark:text-zinc-300">Default
                                        checkbox</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="item_name" type="checkbox" value=""
                                           class="w-4 h-4 text-blue-600 bg-zinc-100 border-zinc-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-zinc-800 focus:ring-2 dark:bg-zinc-700 dark:border-zinc-600">
                                    <label for="item_name"
                                           class="ms-2 text-sm font-normal text-zinc-900 dark:text-zinc-300">Default
                                        checkbox</label>
                                </div>
                            </div>

                            <div class="flex items-center justify-end mt-4 col-span-2">
                                <x-button class="ms-4">
                                    @isset($user)
                                        {{ __('Salvar') }}
                                    @else
                                        {{ __('Registrar') }}
                                    @endisset
                                </x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
