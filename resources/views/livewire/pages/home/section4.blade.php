<div class="mx-auto my-20 bg-base-blue rounded-t-[100px] py-16">
    <div class="flex items-center flex-col container mx-auto">
        <div class="w-2/3 text-center">
            <h2 class="txt-title text-white">{{ $title ?? '' }}</h2>
        </div>

        @if(isset($blogs))
            <div class="grid md:grid-cols-{{count($blogs)}} grid-cols-1 w-full mt-8 px-12 gap-x-8 gap-y-8 md:gap-y-0">
                @foreach($blogs as $blog)
                    <div class="">
                        <div class="text-left bg-white overflow-hidden rounded-2xl">
                            <a href="{{ route('web.blogs.show', $blog) }}">
                                <img class="image rounded-2xl" src="{{ asset('assets/images/no-image.jpg') }}" alt="">
                            </a>
                            <div class="p-5 pt-9 pb-4 space-y-6">
                                <a href="{{ route('web.blogs.show', $blog) }}">
                                    <h3 class="txt-subtitle font-semibold text-xl">{{$blog->title}}</h3>
                                </a>

                                <div class="">
                                    <a href="{{ route('web.blogs.show', $blog) }}">
                                        <p class="txt-base text-zinc-500">
                                            {!! $blog->description !!}
                                        </p>
                                    </a>
                                </div>
                                <div class="">
                                    <a href="{{ route('web.blogs.show', $blog) }}" class="py-3 pr-3">Learn more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="mt-6">
            <a href="{{ route('web.blogs') }}" class="bg-base-red px-6 py-3 text-white">Ver todos</a>
        </div>
    </div>
</div>
