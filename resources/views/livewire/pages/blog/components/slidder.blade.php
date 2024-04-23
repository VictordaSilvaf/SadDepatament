<section>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }
    </style>

    <h2 class="txt-title">{{ $title ?? '' }}</h2>

    <div class="container mx-auto">
        <h1 class="py-6 text-[40px] font-bold text-center">Lorem ipsum dolor sit amet</h1>
    </div>

    <div class="w-full bg-[#EAEAEA]">
        <div class="container mx-auto bg-[#D9D9D9] h-[70vh]">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">Slide 1</div>
                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>
                    ...
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
</section>
@script
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    // import Swiper JS
    import Swiper from 'swiper';
    // import Swiper styles
    import 'swiper/css';

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>
@endscript
