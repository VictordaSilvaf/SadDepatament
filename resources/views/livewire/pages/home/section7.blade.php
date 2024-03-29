<div class="mx-auto my-6 md:mt-20 py-6 md:pt-6">
    <div class="flex items-center flex-col container mx-auto">
        <div class="w-2/3 text-center">
            <h2 class="txt-title">Meus <span class="text-base-red">Projetos</span></h2>
        </div>

        <div class="grid px-3 md-0 grid-cols-2 md:grid-cols-3 container mx-auto gap-4 mt-16">
            @for($i = 0; $i < 7; $i++)
                <a href="#" class="relative overflow-hidden w-full h-72 grid">
                    <div
                        class="w-full h-full z-20 absolute bg-gradient-to-t from-zinc-800 duration-700 border-r-4 border-t-4 border-base-red flex items-end opacity-0 hover:opacity-100">
                        <div class="relative p-4">
                            <h3 class="truncate text-elipsis text-base-red text-2xl">Teste testando</h3>
                            <p class="line-clamp-3 font-thin text-white">Nulla dolor velit adipisicing duis excepteur
                                esse in duis nostrud occaecat mollit incididunt deserunt sunt. Ut ut sunt laborum ex
                                occaecat eu tempor labore enim adipisicing minim ad. Est in quis eu dolore occaecat
                                excepteur fugiat dolore nisi aliqua fugiat enim ut cillum. Labore enim duis nostrud eu.
                                Est ut eiusmod consequat irure quis deserunt ex. Enim laboris dolor magna pariatur.
                                Dolor et ad sint voluptate sunt elit mollit officia ad enim sit consectetur enim.</p>
                        </div>
                    </div>
                    <div class="h-full w-full bg-zinc-200">
                        <img class="w-full h-full object-center object-cover" src="{{ asset('assets/images/no-image.jpg') }}" alt="">
                    </div>
                </a>
            @endfor
        </div>
        <a href="#" class="mt-12 px-4 py-2 sm:px-8 sm:py-4 duration-300 text-sm md:text-lg font-semibold bg-base-red hover:bg-opacity-70 text-white whitespace-nowrap">Ver mais</a>
    </div>
</div>
