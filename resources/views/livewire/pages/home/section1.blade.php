<div class="container mx-auto mb-20 md:my-20">
    <div class="flex items-center flex-col">
        <div class="w-2/3 text-center">
            <h2 class="txt-title">Lorem ipsum dolor sit amet</h2>
            <p class="txt-subtitle mt-4">Lorem ipsum dolor sit amet consectetur. Elementum nisl duis tortor sed.
                Suspendisse lobortis vitae quis vehicula pellentesque sit id. Urna posuere consequat velit vulputate
                faucibus pretium arcu accumsan sit. Vel venenatis sapien.</p>
        </div>

        <div class="sm:grid sm:grid-cols-2 flex-grow w-full h-full mt-12">
            <div class="">
                <img class="image" src="{{ asset('assets/images/no-image.jpg') }}" alt="">
            </div>
            <div class="flex justify-between flex-col px-12 mt-10 sm:mt-0">
                <div class="space-y-6 relative">
                    @for($items = 0; $items < 4; $items++)
                        <div class="flex">
                            <div class="">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 23.8333C18.9583 23.8333 23.8333 18.9583 23.8333 13C23.8333 7.04163 18.9583 2.16663 13 2.16663C7.04167 2.16663 2.16667 7.04163 2.16667 13C2.16667 18.9583 7.04167 23.8333 13 23.8333Z" stroke="#266055" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.39583 13L11.4617 16.0659L17.6042 9.9342" stroke="#266055" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="pl-4 txt-subtitle font-medium text-xl">Lorem ipsum dolor sit amet consectetur. Elementum nisl duis tortor sed.</p>
                        </div>
                    @endfor
                </div>
                <div class="text-white mt-10 mx-auto sm:mx-0">
                    <a href="{{ asset('contato') }}" class="px-6 py-3 bg-base-blue hover:bg-opacity-90 duration-300">Entrar em contato</a>
                </div>
            </div>
        </div>
    </div>
</div>
