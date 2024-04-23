<div class="container mx-auto my-20">
    <div class="flex items-center flex-col">
        <div class="w-2/3 text-center">
            <h2 class="txt-title">{{ $title ?? '' }}</h2>
        </div>

        @if(isset($images))
            <div class="grid grid-cols-1 md:grid-cols-{{count($images)}} w-full mt-8 px-6 md:px-12 gap-2 sm:gap-x-8">
                @foreach($images as $item)
                    <div class="text-center">
                        <img class="image"
                             src="{{ $item ? asset('storage/'.$item) : asset('assets/images/no-image.jpg') }}"
                             alt="">
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
