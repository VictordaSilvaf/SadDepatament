<section>
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <h2 class="txt-title">{{ $title ?? '' }}</h2>

    <div class="container mx-auto">
        <h1 class="py-6 text-[40px] font-bold text-center">Lorem ipsum dolor sit amet</h1>
    </div>

    <div class="w-full bg-[#EAEAEA]">
        <div class="container mx-auto bg-[#D9D9D9] h-[70vh]">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($lastBlogs as $blog)
                        <a href="{{ route('web.blogs.show', $blog->slug) }}" class="swiper-slide relative group">
                            <img class="w-full h-full object-center object-cover" src="{{ asset($blog->image) }}" alt="">
                            <div class="absolute w-full bottom-0 h-1/2 flex items-end bg-gradient-to-t from-neutral-950">
                                <div class="p-8 px-6 sm:px-20">
                                    <h4 class="text-left text-2xl text-base-red">{{$blog->show_title}}</h4>
                                    <p class="text-left mt-6 text-white">{{$blog->show_description}}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.mySwiper', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            dynamicBullets: true,
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
