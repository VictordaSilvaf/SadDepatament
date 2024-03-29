@aware(['component', 'tableName'])

<div x-cloak x-show="!currentlyReorderingStatus"
    @class([
        'mb-3 mb-md-0 input-group' => $component->isBootstrap(),
        'flex rounded-md shadow-sm' => $component->isTailwind(),
    ])>
        <input
            wire:model{{ $component->getSearchOptions() }}="search"
            placeholder="{{ $component->getSearchPlaceholder() }}"
            type="text"
            {{
                $attributes->merge($component->getSearchFieldAttributes())
                ->class([
                    'block w-full border-zinc-300 rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 dark:bg-zinc-700 dark:text-white dark:border-zinc-600 rounded-none rounded-l-md focus:ring-0 focus:border-zinc-300' => $component->isTailwind() && $component->hasSearch() && $component->getSearchFieldAttributes()['default'] ?? true,
                    'block w-full border-zinc-300 rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 dark:bg-zinc-700 dark:text-white dark:border-zinc-600 rounded-md focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50' => $component->isTailwind() && !$component->hasSearch() && $component->getSearchFieldAttributes()['default'] ?? true,
                    'form-control' => $component->isBootstrap() && $component->getSearchFieldAttributes()['default'] ?? true,
                ])
                ->except('default')
            }}

        />

        @if ($component->hasSearch())
        <div @class([
                    'd-inline-flex h-100 align-items-center ' => $component->isBootstrap(),
                ])>
                <div
                    wire:click="clearSearch"

                    @class([
                            'btn btn-outline-secondary d-inline-flex h-100 align-items-center' => $component->isBootstrap(),
                            'inline-flex h-full items-center px-3 text-zinc-500 bg-zinc-50 rounded-r-md border border-l-0 border-zinc-300 cursor-pointer sm:text-sm dark:bg-zinc-700 dark:text-white dark:border-zinc-600 dark:hover:bg-zinc-600' => $component->isTailwind(),
                        ])
                >
                @if($component->isTailwind())
                <x-heroicon-m-x-mark class='w-4 h-4' />
                @else
                <x-heroicon-m-x-mark style='width:1em; height:1em;'  />
                @endif
                    </div>
            </div>
        @endif


</div>
