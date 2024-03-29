<div class="col-span-2" x-data="{showModalAddCategories: false}">
    <div class="flex justify-between mb-2">
        <label
            class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Categorias</label>
        <div class="">
            <x-button type="button" @click="showModalAddCategories = true"
                      class="bg-blue-500 hover:bg-blue-600 dark:bg-blue-500 dark:hover:bg-blue-600">
                <x-icons.plus class="w-3 h-3 fill-white"/>
            </x-button>
            <div class="absolute top-0 left-0 h-screen w-screen bg-black bg-opacity-30 z-40"
                 x-show="showModalAddCategories" x-cloak>
                <div class="w-full h-full flex justify-center items-center">
                    <div class="max-w-4xl w-full bg-white dark:bg-zinc-700 shadow-lg p-6 rounded-xl"
                         @click.outside="showModalAddCategories = false">
                        <div class="flex justify-between items-center">
                            <h3 class="text-xl dark:text-white">Adicionar categoria</h3>

                            <button type="button" @click="showModalAddCategories = false">
                                <svg class="w-3 h-3 dark:text-white" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round"
                                          stroke-linejoin="round" stroke-width="2"
                                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>

                        <div class="mt-4" x-data="{ showSearch: $wire.entangle('showDropdown').live }">
                            <label for="default-categories-search"
                                   class="mb-2 text-sm font-medium text-zinc-900 sr-only dark:text-white">Adicionar</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-zinc-500 dark:text-zinc-400" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input type="search" id="default-categories-search" wire:model="search"
                                       class="block w-full p-4 ps-10 text-sm text-zinc-900 border border-zinc-300 rounded-lg bg-zinc-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                       placeholder=""/>
                                <button type="button" wire:click="addItem"
                                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Buscar
                                </button>

                                <div
                                    class="absolute bottom-0 bg-white flex flex-col translate-y-full overflow-hidden rounded-xl min-w-full"
                                    @click.outside="showSearch = false"
                                    x-show="showSearch">
                                    @if($categoriesSearch)
                                        @foreach($categoriesSearch as $key => $category)
                                            <button type="button" wire:click="addNewCategory({{$model}}, {{$category}})"
                                                    @click="showSearch = false"
                                                    class="py-2 px-5 border flex hover:bg-zinc-300 duration-200">
                                                {{ $category->id ." - ". $category->title }}
                                            </button>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div
                            class="mt-6 bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @isset($model)
                                <div class="flex flex-wrap gap-2">
                                    @foreach($model->categories as $category)
                                        <x-global.badges :remove="true" wire:click="removeCategory({{ $category->id }})"
                                                         :text="$category->title" :type="$category->color"/>
                                    @endforeach
                                </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
        class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <div class="flex flex-wrap gap-2">
            @isset($model)
                <div class="flex flex-wrap gap-2">
                    @foreach($model->categories as $category)
                        <x-global.badges :remove="true" wire:click="removeCategory({{ $category->id }})"
                                         :text="$category->title" :type="$category->color"/>
                    @endforeach
                </div>
            @endisset
        </div>
    </div>
</div>
