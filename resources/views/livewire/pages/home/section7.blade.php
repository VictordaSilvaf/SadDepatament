<div class="mx-auto my-6 md:mt-20 py-6 md:pt-6">
    <div class="flex items-center flex-col container mx-auto">
        <div class="w-2/3 text-center">
            <h2 class="txt-title">{{ $title }}</h2>
        </div>

        <div class="grid px-3 md-0 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 container mx-auto gap-4 mt-16">
            @foreach($blogs as $blog)
                <a href="{{ route('web.blogs.show', $blog->slug) }}" class="relative overflow-hidden w-full h-72 grid">
                    <div
                        class="w-full h-full z-20 absolute bg-gradient-to-t from-zinc-800 duration-700 border-r-4 border-t-4 border-base-red flex items-end opacity-0 hover:opacity-100">
                        <div class="w-full relative p-4">
                            <h3 class="truncate text-elipsis text-base-red text-2xl">
                                {{ $blog->show_title }}
                            </h3>
                            <div class="blog_container line-clamp-3 font-thin text-white w-full max-w-full relative pr-4">
                                {!! $blog->show_description !!}
                            </div>
                        </div>
                    </div>
                    <div class="h-full w-full bg-zinc-200">
                        <img class="w-full h-full object-center object-cover"
                             src="{{ asset('assets/images/no-image.jpg') }}" alt="">
                    </div>
                </a>
            @endforeach
        </div>
        <a href="#"
           class="mt-12 px-4 py-2 sm:px-8 sm:py-4 duration-300 text-sm md:text-lg font-semibold bg-base-red hover:bg-opacity-70 text-white whitespace-nowrap">Ver
            mais</a>
    </div>
</div>
