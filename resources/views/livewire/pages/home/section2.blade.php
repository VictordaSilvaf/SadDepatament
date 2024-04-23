<div class="container mx-auto my-20">
    <div class="flex items-center flex-col">
        <div class="w-2/3 text-center">
            <h2 class="txt-title">{{ $title ?? '' }}</h2>
            <p class="txt-subtitle mt-8">{{ $text ?? '' }}</p>
        </div>

        @if(isset($items))
            <div class="grid grid-cols-{{count($items)}} w-full mt-12 divide-x-2 my-8">
                @foreach($items as $item)
                    <div class="text-center">
                        <h3 class="txt-subtitle text-xl font-bold">{{$item[0] ?? ''}}</h3>
                        <p class="text-red-600 font-semibold text-lg">{{$item[1] ?? ''}}</p>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="w-full">
            <div class="h-[50vh] md:h-[70vh] flex justify-center">
                <img
                    class="image h-full w-auto"
                    src="{{ $image ? asset('storage/'.$image) : asset('assets/images/no-image.jpg') }}"
                    alt=""
                >
            </div>
        </div>
    </div>
</div>
