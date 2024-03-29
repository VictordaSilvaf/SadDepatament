<div class="mx-auto my-20 bg-base-blue rounded-t-[100px] py-16">
    <div class="flex items-center flex-col container mx-auto">
        <div class="w-2/3 text-center">
            <h2 class="txt-title text-white">Our <span class="text-base-red">Partners</span></h2>
        </div>

        <div class="grid md:grid-cols-3 grid-cols-1 w-full mt-8 px-12 gap-x-8 gap-y-8 md:gap-y-0">
            @for($items = 0; $items < 3; $items++)
                <div class="">
                    <div class="text-left bg-white overflow-hidden rounded-2xl">
                        <img class="image rounded-2xl" src="{{ asset('assets/images/no-image.jpg') }}" alt="">
                        <div class="p-5 pt-9 pb-4 space-y-6">
                            <h3 class="txt-subtitle font-semibold text-xl">Humans are much more smarter than AI</h3>
                            <p class="txt-base text-zinc-500">
                                Lorem ipsum dolar sit amet consectetur. Lorem ipsum dolar sit amet
                                consectetur.
                            </p>
                            <div class="">
                                <a href="#" class="py-3 pr-3">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="mt-6">
            <a href="#" class="bg-base-red px-6 py-3 text-white">Ver todos</a>
        </div>
    </div>
</div>
