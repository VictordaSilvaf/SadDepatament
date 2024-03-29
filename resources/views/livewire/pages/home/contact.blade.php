<div class="py-6 relative min-h-[600px] flex items-center">
    <div class="container mx-auto h-full">
        <div class="w-full px-3 md:px-0 md:w-1/2 h-full">
            <h3 class="text-3xl">Entre em <span class="text-base-red">contato</span> agora mesmo</h3>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div class="w-full">
                    <label for="name" class="my-4">Nome</label>
                    <input class="rounded-md mt-1 w-full bg-zinc-100" id="name" name="name" type="text">
                </div>
                <div class="w-full">
                    <label for="last_name" class="my-4">Sobrenome</label>
                    <input class="rounded-md mt-1 w-full bg-zinc-100" id="last_name" name="last_name" type="text">
                </div>
                <div class="w-full col-span-full">
                    <label for="email" class="my-4">Email</label>
                    <input class="rounded-md mt-1 w-full bg-zinc-100" id="email" name="email" type="text">
                </div>
                <div class="w-full col-span-full">
                    <label for="description" class="my-4">Me conte um pouco sobre o seu projeto</label>
                    <textarea class="rounded-md mt-1 bg-zinc-100 w-full" id="description" name="description" type="text"></textarea>
                </div>
                <div class="w-full col-span-full flex justify-center">
                    <button class="px-20 py-2 text-white bg-base-red hover:bg-opacity-80 duration-300">Enviar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="invisible md:visible w-screen absolute right-0 top-0 h-full flex justify-end -z-10">
        <div class="w-full md:w-1/2 h-full pl-16 relative flex items-center">
            <div class="absolute h-[350px] rounded-l-full w-full bg-base-blue flex justify-end items-center"></div>
            <div class="mx-auto w-[400px] relative h-full bg-base-red">
                <div class="absolute w-full h-full bg-base-red">
                </div>
                <div class="absolute w-full h-full pr-4 py-4 -ml-2">
                    <div class="h-full w-full bg-zinc-300"></div>
                </div>
            </div>
        </div>
    </div>
</div>

