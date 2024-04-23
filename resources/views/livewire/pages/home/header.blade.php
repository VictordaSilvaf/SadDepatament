<div class="w-full sm:grid sm:grid-cols-2 flex-grow text-black py-32 bg-[#F4F4F4]">
    <div class="flex justify-center items-center sm:pb-4">
        <div class="w-[65%]">
            <h1 class="txt-title">{{$title}}</h1>
            <p class="txt-base mt-4">
                {{$text}}
            </p>
        </div>
    </div>
    <div class="">
        <img class="w-full h-full object-cover object-center" src="{{ $image ? asset('storage/'.$image) : asset('assets/images/no-image.jpg') }}" alt="">
    </div>
</div>
