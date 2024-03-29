@aware(['component', 'tableName'])
@php
    $customAttributes = $component->getBulkActionsThAttributes();
    $bulkActionsThCheckboxAttributes = $component->getBulkActionsThCheckboxAttributes();
    $theme = $component->getTheme();
@endphp

@if ($component->bulkActionsAreEnabled() && $component->hasBulkActions())
    <x-livewire-tables::table.th.plain wire:key="{{ $tableName }}-thead-bulk-actions" :displayMinimisedOnReorder="true" :$customAttributes>
        <div
            x-data="{newSelectCount: 0, indeterminateCheckbox: false, bulkActionHeaderChecked: false}"
            x-init="$watch('selectedItems', value => indeterminateCheckbox = (value.length > 0 && value.length < paginationTotalItemCount))"
            x-cloak x-show="currentlyReorderingStatus !== true"
            @class([
                'inline-flex rounded-md shadow-sm' => $theme === 'tailwind',
                'form-check' => $theme === 'bootstrap-5',
            ])
        >
            <input
                x-init="$watch('indeterminateCheckbox', value => $el.indeterminate = value); $watch('selectedItems', value => newSelectCount = value.length);"
                x-on:click="if(selectedItems.length == paginationTotalItemCount) { $el.indeterminate = false; $wire.clearSelected(); bulkActionHeaderChecked = false; } else { bulkActionHeaderChecked = true; $el.indeterminate = false; $wire.setAllSelected(); }"
                type="checkbox"
                :checked="selectedItems.length == paginationTotalItemCount"
                {{
                    $attributes->merge($bulkActionsThCheckboxAttributes)->class([
                        'rounded border-zinc-300 text-indigo-600 shadow-sm transition duration-150 ease-in-out focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-zinc-900 dark:text-white dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600' => ($theme === 'tailwind') && ($bulkActionsThCheckboxAttributes['default'] ?? true),
                        'form-check-input' => ($theme === 'bootstrap-5') && ($bulkActionsThCheckboxAttributes['default'] ?? true),
                        'except' => 'default',
                    ])
                }}
            />
        </div>
    </x-livewire-tables::table.th.plain>
@endif
