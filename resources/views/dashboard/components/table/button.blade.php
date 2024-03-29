@aware(['component'])

@if ($component->isTailwind())
    <div class="w-full mb-4 md:w-auto md:mb-0">
        <div
                class="relative z-10 inline-block w-full text-left md:w-auto"
                wire:key="my-dropdown-button-{{ $component->getTableName() }}"
        >
            <div>
                <span class="rounded-md shadow-sm">
                    <a href="{{ $route }}"
                       type="button"
                       class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-zinc-700 bg-white border border-zinc-300 rounded-md shadow-sm hover:bg-zinc-50 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-zinc-700 dark:text-white dark:border-zinc-600 dark:hover:bg-zinc-600"
                    >
                        {{ __($text) }}
                    </a>
                </span>
            </div>
        </div>
    </div>
@endif
