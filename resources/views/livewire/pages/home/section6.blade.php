<div class="mx-auto my-20 mb-5 py-16 bg-[#F8F8F8] relative min-h-[600px]">
    <div class="items-center container mx-auto grid grid-cols-1 sm:grid-cols-2 gap-x-12 z-10">
        <div class="h-full">
            <div class="md:absolute md:w-[50vw] h-full top-0 left-0 z-0 flex mt-8">
                <div
                    class="bg-base-blue w-full h-[550px] md:rounded-r-[30px] flex md:justify-end items-center md:pr-7 justify-center shadow-xl">
                    <div class="h-[80%]">
                        <img src="{{ asset('assets/images/no-image.jpg') }}" alt="Imagem relacionada a questões"
                             class="h-full w-full object-cover object-center">
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col h-full mt-16 sm:mt-0 mx-8">
            <h3 class="txt-subtitle text-2xl font-bold">Frequently asked <span class="text-base-red">questions</span>
            </h3>
            <div class="flex flex-col">
                @for($i = 0; $i < 6; $i++)
                    <div class="bg-white p-4 mt-6 cursor-pointer" x-data="{ showQuestion: false }"
                         @click="showQuestion = !showQuestion" x-cloak>
                        <div class="flex justify-between text-base-blue items-center">
                            <h4 class="txt-subtitle font-semibold select-none">
                                Lorem ipsum dolar sit amet consectetur
                            </h4>
                            <div class="relative">
                                <span class="text-3xl select-none" x-show="showQuestion"
                                      x-bind:class="{ 'transition-transform ease-in-out duration-300': showQuestion }">-</span>
                                <span class="text-3xl select-none" x-show="!showQuestion"
                                      x-bind:class="{ 'transition-transform ease-in-out duration-300': !showQuestion }">+</span>
                            </div>

                        </div>
                        <p class="text-zinc-500 mt-4" x-transition x-show="showQuestion">
                            Lorem ipsum dolor sit amet consectetur. Pulvinar arcu mattis in at sodales condimentum.
                            Gravida arcu aliquet rutrum erat varius. Tellus felis sed pretium in egestas.
                        </p>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
