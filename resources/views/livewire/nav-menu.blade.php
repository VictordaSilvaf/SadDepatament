<div class="relative w-full flex container py-2 mx-auto justify-between text-black items-center px-6 md:px-0">
    <a href="{{ route('home') }}" class="">Logo</a>

    <div class="space-x-12 hidden md:flex">
        <x-components.nav-button :route="route('home')" text="Home" :isActive="request()->routeIs('home')"/>
        <x-components.nav-button :route="route('servicos')" text="Serviços" :isActive="request()->routeIs('servicos')"/>
        <x-components.nav-button :route="route('blog')" text="Blog" :isActive="request()->routeIs('blog')"/>
        <x-components.nav-button :route="route('contato')" text="Contato" :isActive="request()->routeIs('contato')"/>
    </div>

    <div class="flex md:hidden" x-data="{ showMenu: false }" x-cloak>
        <button class="px-4 py-2 text-zinc-950" @click="showMenu = !showMenu">
            <svg id="Capa_1" enable-background="new 0 0 464.205 464.205" height="18" viewBox="0 0 464.205 464.205"
                 width="18" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <g id="grip-solid-horizontal_1_">
                        <path
                            d="m435.192 406.18h-406.179c-16.024 0-29.013-12.99-29.013-29.013s12.989-29.013 29.013-29.013h406.18c16.023 0 29.013 12.99 29.013 29.013-.001 16.023-12.99 29.013-29.014 29.013z"/>
                        <path
                            d="m435.192 261.115h-406.179c-16.024 0-29.013-12.989-29.013-29.012s12.989-29.013 29.013-29.013h406.18c16.023 0 29.013 12.989 29.013 29.013s-12.99 29.012-29.014 29.012z"/>
                        <path
                            d="m435.192 116.051h-406.179c-16.024 0-29.013-12.989-29.013-29.013s12.989-29.013 29.013-29.013h406.18c16.023 0 29.013 12.989 29.013 29.013s-12.99 29.013-29.014 29.013z"/>
                    </g>
                </g>
            </svg>
        </button>

        <div x-show="showMenu" @click.outside="showMenu = false"
             class="absolute top-12 right-0 z-30 flex flex-col shadow-lg text-center">
            <a href="{{ route('home') }}" @click="showMenu = false" class="px-10 py-2 text-zinc-950 bg-zinc-50 duration-300 hover:bg-zinc-100">
                Home
            </a>
            <a href="{{ route('servicos') }}" @click="showMenu = false" class="px-10 py-2 text-zinc-950 bg-zinc-50 duration-300 hover:bg-zinc-100">
                Servicos
            </a>
            <a href="{{ route('blog') }}" @click="showMenu = false" class="px-10 py-2 text-zinc-950 bg-zinc-50 duration-300 hover:bg-zinc-100">
                Blog
            </a>
            <a href="{{ route('contato') }}" @click="showMenu = false" class="px-10 py-2 text-zinc-950 bg-zinc-50 duration-300 hover:bg-zinc-100">
                Contato
            </a>
        </div>
    </div>
</div>
