@props(['text', 'isActive', 'route'])

<a href="{{ $route }}"
   class="relative group" {{ $attributes->merge([]) }}
   x-data="{ showAnimation: false }"
   x-init="setTimeout(() => showAnimation = true, 200)"
   x-cloak
>
    @if($isActive)
        <div class="border-l border-b border-red-500 absolute bottom-0 left-0 fade-in w-5 h-5"
             x-show="showAnimation"
             x-transition:enter="fade-in"
             x-transition:enter-start="opacity-0 w-0 h-0"
             x-transition:enter-end="opacity-100 w-5 h-5"
             style="transition-duration: 1s;"></div>
        <div class="border-l-2 border-b-2 border-red-500 absolute bottom-1.5 left-1.5 w-7 h-7 fade-in"
             x-show="showAnimation"
             x-transition:enter="fade-in"
             x-transition:enter-start="opacity-0 w-0 h-0"
             x-transition:enter-end="opacity-100 w-7 h-7"
             style="transition-duration: 1s;"></div>
        <div class="border-r border-t border-red-500 absolute top-0 right-0 w-5 h-5 fade-in"
             x-show="showAnimation"
             x-transition:enter="fade-in"
             x-transition:enter-start="opacity-0 w-0 h-0"
             x-transition:enter-end="opacity-100 w-5 h-5"
             style="transition-duration: 1s;"></div>
        <div class="border-r-2 border-t-2 border-red-500 absolute top-1.5 right-1.5 w-7 h-7 fade-in"
             x-show="showAnimation"
             x-transition:enter="fade-in"
             x-transition:enter-start="opacity-0 w-0 h-0"
             x-transition:enter-end="opacity-100 w-7 h-7"
             style="transition-duration: 1s;"></div>
    @endif

    <p class="px-5 py-3 {{ $isActive ? 'text-red-600' : 'hover:text-red-600 duration-300' }}">{{ $text }}</p>
</a>
