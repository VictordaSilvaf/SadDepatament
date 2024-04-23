<div class="w-full">
    <div class="h-screen w-full relative overflow-hidden">
        <livewire:nav-menu/>

        <section class="relative w-full h-full flex-1 bg-center bg-cover flex justify-center items-end"
                 style="background-image: url('{{ asset($blog->image) }}')">
            <!-- Película preta -->
            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>

            <div class="relative z-10 max-w-3xl text-center px-6 md:px-0 pb-48">
                <h1 class="txt-title text-white">
                    {{ $blog->title_1 ?? '' }}
                </h1>

                <div class="my-8 text-white">
                    {!!  $blog->description_1 ?? '' !!}
                </div>

                <a href="{{ route('web.home') }}#contact" class="px-6 bg-white py-3 text-black">Entrar em contato</a>
            </div>
        </section>
    </div>

    <section class="container mx-auto py-16">
        <h1 class="txt-title text-center ">
            {{ $blog->title_2 ?? '' }}
        </h1>

        <div class="my-8 text-center ">
            {{ $blog->subtitle_2 ?? '' }}
        </div>

        <div class="flex flex-row w-full gap-x-6 items-center">
            @isset($blog->image_2)
                <div class="flex-1">
                    <img class="w-full h-full object-cover object-center" src="{{ asset($blog->image_2) }}" alt="">
                </div>
            @endisset
            <div class="flex-1">
                {!! $blog->description_2 ?? '' !!}
            </div>
        </div>

        <div class="flex flex-row-reverse w-full gap-x-6 items-center mt-16">
            @isset($blog->image_3)
                <div class="flex-1">
                    <img class="w-full h-full object-cover object-center" src="{{ asset($blog->image_3) }}" alt="">
                </div>
            @endisset
            <div class="flex-1 text-right">
                {!! $blog->description_3 ?? '' !!}
            </div>
        </div>
    </section>

    <section class="">
        <div class="container mx-auto">
            <h2 class="txt-title text-center mt-16">
                {{ $blog->title_4 ?? '' }}
            </h2>

            <div class="my-8 text-center ">
                {{ $blog->description_4 ?? '' }}
            </div>
        </div>

        @isset($blog->image_4)
            <div class="w-full h-[50vh] mt-10">
                <img src="{{ asset($blog->image_4) }}" alt="" class="w-full h-full object-cover object-center">
            </div>
        @endisset
    </section>

    <livewire:pages.components.sub-footer/>
    <livewire:pages.components.footer/>
</div>
