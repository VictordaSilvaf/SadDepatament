<div>
    @error('images.*') <span class="error">{{ $message }}</span> @enderror
    <label
        class="flex flex-wrap p-2 my-4 bg-opacity-50 min-h-64 border-2 border-zinc-300 border-dashed rounded-lg cursor-pointer bg-zinc-50 dark:hover:bg-bray-800 dark:bg-zinc-700 hover:bg-zinc-100 dark:border-zinc-600 dark:hover:border-zinc-500 dark:hover:bg-zinc-600">
        @if($images)
            @foreach ($images as $image)
                <img src="{{ $image->temporaryUrl() }}" alt="" class="w-1/3 p-2 h-auto rounded-md">
            @endforeach
        @else
            @if($base_images)
                @foreach ($base_images as $image)
                    <div class="w-1/3 h-auto p-2">
                        <img src="{{ asset('storage/'.$image) }}" alt=""
                             class="w-full h-auto object-center object-cover rounded-md">
                    </div>
                @endforeach
            @else
                <div class="w-full h-full flex justify-center my-auto">
                    <div class="flex flex-col h-full items-center justify-center">
                        <svg class="w-8 h-8 mb-4 text-zinc-500 dark:text-zinc-400" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                        </svg>
                        <p class="mb-2 text-sm text-zinc-500 dark:text-zinc-400"><span class="font-semibold">Clique aqui para fazer o upload</span>
                            ou arraste e solte</p>
                        <p class="text-xs text-zinc-500 dark:text-zinc-400">SVG, PNG, JPG or GIF</p>
                    </div>
                </div>
            @endif
        @endif
        <input
            type="file"
            class="hidden"
            wire:model="images"
            name="{{$name}}[]"
            multiple>
    </label>
</div>
