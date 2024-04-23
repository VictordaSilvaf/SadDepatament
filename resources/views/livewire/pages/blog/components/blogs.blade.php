<section class="px-6 md:px-0">
    <div class="container mx-auto">
        <h1 id="blog-list" class="py-6 text-[40px] font-bold text-center">Lorem ipsum dolor sit amet</h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 container mx-auto gap-8">
        @foreach($blogs as $blog)
            <a href="{{ route('web.blogs.show', $blog->slug) }}" class="w-full">
                <div class="h-[250px] w-full bg-[#d9d9d9]">
                    <img src="{{ asset($blog->image) }}" alt="" class="w-full h-full object-cover object-center">
                </div>
                <h3 class="font-semibold text-[20px] mt-2">{{$blog->show_title}}</h3>
                <div class="text-[16px] mt-2">
                    {{$blog->show_description}}
                </div>
            </a>
        @endforeach
    </div>

    <div class="container mx-auto mt-6">
        {{ $blogs->links(data: ['scrollTo' => '#blog-list']) }}
    </div>
</section>
