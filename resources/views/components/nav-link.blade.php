@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'flex items-center p-2 text-base font-normal text-zinc-900 bg-zinc-100 rounded-lg hover:bg-zinc-100 dark:bg-zinc-600 group dark:text-zinc-200 dark:hover:bg-zinc-700 duration-300'
                : 'flex items-center p-2 text-base font-normal text-zinc-900 rounded-lg hover:bg-zinc-100 group dark:text-zinc-200 dark:hover:bg-zinc-600 duration-300';
@endphp

<li>
    <a {{ $attributes->merge(['class' => $classes]) }}>
        @isset($icon)
            {{$icon}}
        @else
            <div class="w-6 h-6"></div>
        @endif
        <span class="ml-3" sidebar-toggle-item>{{ $slot }}</span>
    </a>
</li>
