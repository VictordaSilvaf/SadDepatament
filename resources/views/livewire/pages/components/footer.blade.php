<div class="pb-12 pt-24 sm:pt-16 bg-[#F8F8F8]">
    <div
        class="container mx-auto flex flex-col px-10 gap-y-8 sm:gap-y-8 text-center sm:text-left sm:flex-row justify-between">
        <div class="flex-col flex w-full sm:max-w-[25%]">
            <a href="#" class="mb-3 flex justify-center sm:block">
                <img class="w-1/3 md:w-2/4 bg-zinc-800"
                     src="{{ $settings->logo ? asset('storage/'.$settings->logo) : asset('assets/images/no-image.jpg') }}"
                     alt="">
            </a>
            <p class="text-sm text-zinc-500">
                {{ $settings->description }}
            </p>
        </div>
        <div class="flex-col flex">
            <h3 class="txt-subtitle text-lg mb-2">Páginas Principais</h3>
            <a href="{{ route('web.home') }}" class="hover:text-red-600 duration-300 {{ request()->routeIs('web.home') ? 'text-red-600' : '' }}">Home</a>
{{--            <a href="{{ route('web.servicos') }}" class="hover:text-red-600 duration-300  {{ request()->routeIs('web.servicos') ? 'text-red-600' : '' }}">Serviços</a>--}}
            <a href="{{ route('web.blogs') }}" class="hover:text-red-600 duration-300  {{ request()->routeIs('web.blogs') ? 'text-red-600' : '' }}">Blogs</a>
            <a href="{{ route('web.home') }}#contact" class="hover:text-red-600 duration-300">Contato</a>
        </div>
        <div class="flex-col flex">
            @isset($blogs)
                <h3 class="txt-subtitle text-lg mb-2">Últimas Postagens</h3>
                @foreach($blogs as $item)
                    <a href="{{ route('web.blogs.show', $item->slug) }}" class="line-clamp-1">{{ $loop->index + 1 }} - {{ $item->show_title }}</a>
                @endforeach
            @endisset
        </div>
        <div class="flex-col flex">
            @isset($settings->footer_useful_links)
                <h3 class="txt-subtitle text-lg mb-2">Links Úteis</h3>
                @foreach($settings->footer_useful_links as $item)
                    @isset($item['link'])
                        <a href="{{ $item['link'] }}" target="_blank" class="">{{ $item['title'] }}</a>
                    @endisset
                @endforeach
            @endisset
        </div>
        <div class="">
            @isset($settings->footer_social_links)
                <h3 class="txt-subtitle text-lg mb-2">Redes Sociais</h3>
                <div class="sm:grid sm:grid-cols-4 mt-3 gap-x-4 px-10 sm:px-0 flex justify-center">
                    @foreach($settings->footer_social_links as $item)
                        @isset($item['link'])
                            <a href="{{ $item['link'] }}" class="w-8 h-8 rounded-full bg-zinc-500" target="_blank">
                                <img
                                    src="{{ $item['image'] ? asset('storage/'.$item['image']) : asset('assets/images/no-image.jpg') }}"
                                    alt="">
                            </a>
                        @endisset
                    @endforeach
                </div>
            @endisset
        </div>
    </div>
</div>
