<div class="flex items-center justify-center w-full">
    <label for="dropzone-file"
           class="flex flex-col items-center justify-center w-full h-64 border-2 border-zinc-300 border-dashed rounded-lg cursor-pointer bg-zinc-50 dark:hover:bg-bray-800 dark:bg-zinc-700 hover:bg-zinc-100 dark:border-zinc-600 dark:hover:border-zinc-500 dark:hover:bg-zinc-600">
        <div class="flex flex-col items-center justify-center">

            @isset($photo)
                <div class="w-auto  object-cover bg-red-700 h-64">
                    <img class="h-full w-auto" src="{{ $photo->temporaryUrl() }}" alt="imagem selecionada">
                </div>
            @else
                @if($image)
                    <div class="w-auto  object-cover bg-red-700 h-64">
                        <img class="h-full w-auto" src="{{ asset($image) }}" alt="imagem selecionada">
                    </div>
                @else
                    <svg class="w-8 h-8 mb-4 text-zinc-500 dark:text-zinc-400" aria-hidden="true"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                    </svg>
                    <p class="mb-2 text-sm text-zinc-500 dark:text-zinc-400"><span class="font-semibold">Clique aqui para fazer o upload</span>
                        ou arraste e solte</p>
                    <p class="text-xs text-zinc-500 dark:text-zinc-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                @endif
            @endisset
        </div>
        <input wire:model="photo"
               name="image"
               id="dropzone-file"
               type="file"
               value="{{ $photo ? $photo->temporaryUrl() : '' }}"
               class="hidden"/>
    </label>
</div>
