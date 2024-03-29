<div class="absolute top-0 left-0 z-10 pt-20 h-screen">
    <div id="drawer-example"
         class="p-4 overflow-y-auto transition-transform -translate-x-full lg:translate-x-0 w-80 bg-white dark:bg-zinc-800 transition-width h-full"
         tabindex="-1" data-drawer-body-scrolling="false" aria-labelledby="drawer-label">
        <div
            class="flex relative flex-col flex-1 pt-0 min-h-0 bg-white dark:bg-zinc-800 justify-between h-full">
            <div class="flex overflow-y-auto flex-col flex-1 pt-5 pb-4">
                <div
                    class="flex-1 px-3 space-y-1 bg-white divide-y divide-zinc-200 dark:bg-zinc-800 dark:divide-zinc-700">
                    <ul class="pb-2 space-y-2">
                        <li>
                            <form action="#" method="GET" class="lg:hidden">
                                <label for="mobile-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-zinc-500" fill="currentColor" viewBox="0 0 20 20"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" name="email" id="mobile-search"
                                           class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-zinc-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                           placeholder="Search">
                                </div>
                            </form>
                        </li>
                        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            <x-slot name="icon">
                                <svg
                                    class="w-6 h-6 text-zinc-500 transition group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white duration-300"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                            </x-slot>
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <li>
                            <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-zinc-900 rounded-lg transition duration-75 group hover:bg-zinc-100 dark:text-zinc-200 dark:hover:bg-zinc-700"
                                    aria-controls="dropdown-pages-nav" data-collapse-toggle="dropdown-pages-nav">
                                <svg
                                    class="flex-shrink-0 w-6 h-6 text-zinc-500 transition duration-75 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                      sidebar-toggle-item>Páginas</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-pages-nav" class="hidden py-2 space-y-2">
                                <div class="">
                                    <x-nav-link href="{{ route('dashboard.home.create') }}" :active="request()->routeIs('dashboard.home*')">
                                        <x-slot name="icon">
                                            <div class="w-5 h-5 opacity-60 ml-6">
                                                <x-icons.home/>
                                            </div>
                                        </x-slot>
                                        {{ __('Home') }}
                                    </x-nav-link>
                                </div>
                                <div class="">
                                    <x-nav-link href="#"
                                                :active="request()->routeIs('login')">
                                        <x-slot name="icon">
                                            <div class="w-5 h-5 opacity-60 ml-6">
                                                <x-icons.contato/>
                                            </div>
                                        </x-slot>
                                        {{ __('Contato') }}
                                    </x-nav-link>
                                </div>
                            </ul>
                        </li>

                        @role('blogs')
                        <li>
                            <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-zinc-900 rounded-lg transition duration-75 group hover:bg-zinc-100 dark:text-zinc-200 dark:hover:bg-zinc-700"
                                    aria-controls="dropdown-blog-nav" data-collapse-toggle="dropdown-blog-nav">
                                <div class="w-5 h-5 opacity-60 ml-0.5">
                                    <x-icons.post/>
                                </div>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                      sidebar-toggle-item>Blog</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-blog-nav" class="hidden py-2 space-y-2">
                                @can('index blogs')
                                    <div class="">
                                        <x-nav-link href="{{ route('blogs.index') }}"
                                                    :active="request()->routeIs('blogs*')">
                                            <x-slot name="icon">
                                                <div class="w-5 h-5 opacity-60 ml-6">
                                                    <x-icons.blog/>
                                                </div>
                                            </x-slot>
                                            {{ __('Postagens') }}
                                        </x-nav-link>
                                    </div>
                                @endcan
                                @can('index categories')
                                    <div class="">
                                        <x-nav-link href="{{ route('categories.index') }}"
                                                    :active="request()->routeIs('categories*')">
                                            <x-slot name="icon">
                                                <div class="w-5 h-5 opacity-60 ml-6">
                                                    <x-icons.category/>
                                                </div>
                                            </x-slot>
                                            {{ __('Categorias') }}
                                        </x-nav-link>
                                    </div>
                                @endcan
                                @can('index tags')
                                    <div class="">
                                        <x-nav-link href="{{ route('tags.index') }}"
                                                    :active="request()->routeIs('tags*')">
                                            <x-slot name="icon">
                                                <div class="w-5 h-5 opacity-60 ml-6">
                                                    <x-icons.tag/>
                                                </div>
                                            </x-slot>
                                            {{ __('Tags') }}
                                        </x-nav-link>
                                    </div>
                                @endcan
                            </ul>
                        </li>
                        @endrole

                        @role('users')
                        <li>
                            <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-zinc-900 rounded-lg transition duration-75 group hover:bg-zinc-100 dark:text-zinc-200 dark:hover:bg-zinc-700"
                                    aria-controls="dropdown-users" data-collapse-toggle="dropdown-users">
                                <svg
                                    class="flex-shrink-0 w-6 h-6 text-zinc-500 transition duration-75 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                      sidebar-toggle-item>Usuários</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>

                            <ul id="dropdown-users" class="hidden py-2 space-y-2 ">
                                @can('edit users')
                                    <div class="">
                                        <x-nav-link href="{{ route('users.index') }}"
                                                    :active="request()->routeIs('login')">
                                            <x-slot name="icon">
                                                <div class="w-5 h-5 opacity-60 ml-6">
                                                    <x-icons.home/>
                                                </div>
                                            </x-slot>
                                            {{ __('Usuários') }}
                                        </x-nav-link>
                                    </div>
                                @endcan
                                @can('edit permissions')
                                    <div class="">
                                        <x-nav-link href="{{ route('blogs.index') }}"
                                                    :active="request()->routeIs('blogs*')">
                                            <x-slot name="icon">
                                                <div class="w-5 h-5 opacity-60 ml-6">
                                                    <x-icons.blog/>
                                                </div>
                                            </x-slot>
                                            {{ __('Permissions') }}
                                        </x-nav-link>
                                    </div>
                                @endcan
                            </ul>
                        </li>
                        @endrole
                    </ul>
                    <ul class="pt-2 space-y-2">
                        @role('smtp')
                            <x-nav-link href="{{ route('smtp.index') }}" :active="request()->routeIs('smtp*')">
                                <x-slot name="icon">
                                    <svg
                                        class="flex-shrink-0 w-6 h-6 text-zinc-500 transition duration-75 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                        <path fill-rule="evenodd"
                                              d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </x-slot>
                                {{ __('SMTP') }}
                            </x-nav-link>
                        @endrole
                        @role('settings')
                        <x-nav-link href="{{ route('settings.index') }}" :active="request()->routeIs('settings*')">
                            <x-slot name="icon">
                                <svg
                                    class="flex-shrink-0 w-6 h-6 text-zinc-500 transition duration-75 group-hover:text-zinc-900 dark:text-zinc-400 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd"
                                          d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </x-slot>
                            {{ __('Configurações') }}
                        </x-nav-link>
                        @endrole
                    </ul>
                </div>
            </div>
            <div class="hidden absolute bottom-0 left-0 justify-center p-4 space-x-4 w-full lg:flex"
                 sidebar-bottom-menu>
                <a href="#"
                   class="inline-flex justify-center p-2 text-zinc-500 rounded cursor-pointer hover:text-zinc-900 hover:bg-zinc-100 dark:hover:bg-zinc-700 dark:hover:text-white">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z"></path>
                    </svg>
                </a>
                <a href="../../users/settings/" data-tooltip-target="tooltip-settings"
                   class="inline-flex justify-center p-2 text-zinc-500 rounded cursor-pointer hover:text-zinc-900 hover:bg-zinc-100 dark:hover:bg-zinc-700 dark:hover:text-white">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                              clip-rule="evenodd"></path>
                    </svg>
                </a>
                <div id="tooltip-settings" role="tooltip"
                     class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-zinc-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-zinc-700">
                    Settings page
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <button type="button" data-dropdown-toggle="language-dropdown"
                        class="inline-flex justify-center p-2 text-zinc-500 rounded cursor-pointer hover:text-zinc-900 hover:bg-zinc-100 dark:hover:bg-zinc-700 dark:hover:text-white">
                    <svg class="h-5 w-5 rounded-full mt-0.5" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                        <path fill="#b22234" d="M0 0h7410v3900H0z"/>
                        <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff"
                              stroke-width="300"/>
                        <path fill="#3c3b6e" d="M0 0h2964v2100H0z"/>
                        <g fill="#fff">
                            <g id="d">
                                <g id="c">
                                    <g id="e">
                                        <g id="b">
                                            <path id="a"
                                                  d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z"/>
                                            <use xlink:href="#a" y="420"/>
                                            <use xlink:href="#a" y="840"/>
                                            <use xlink:href="#a" y="1260"/>
                                        </g>
                                        <use xlink:href="#a" y="1680"/>
                                    </g>
                                    <use xlink:href="#b" x="247" y="210"/>
                                </g>
                                <use xlink:href="#c" x="494"/>
                            </g>
                            <use xlink:href="#d" x="988"/>
                            <use xlink:href="#c" x="1976"/>
                            <use xlink:href="#e" x="2470"/>
                        </g>
                    </svg>
                </button>

                <div
                    class="hidden z-50 my-4 text-base list-none bg-white rounded divide-y divide-zinc-100 shadow dark:bg-zinc-700"
                    id="language-dropdown">
                    <ul class="py-1" role="none">
                        <li>
                            <a href="#"
                               class="block py-2 px-4 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white"
                               role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                         id="flag-icon-css-us" viewBox="0 0 512 512">
                                        <g fill-rule="evenodd">
                                            <g stroke-width="1pt">
                                                <path fill="#bd3d44"
                                                      d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                      transform="scale(3.9385)"/>
                                                <path fill="#fff"
                                                      d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                      transform="scale(3.9385)"/>
                                            </g>
                                            <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/>
                                            <path fill="#fff"
                                                  d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                                  transform="scale(3.9385)"/>
                                        </g>
                                    </svg>
                                    English (US)
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="block py-2 px-4 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white"
                               role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                         id="flag-icon-css-de" viewBox="0 0 512 512">
                                        <path fill="#ffce00" d="M0 341.3h512V512H0z"/>
                                        <path d="M0 0h512v170.7H0z"/>
                                        <path fill="#d00" d="M0 170.7h512v170.6H0z"/>
                                    </svg>
                                    Deutsch
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="block py-2 px-4 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white"
                               role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                         id="flag-icon-css-it" viewBox="0 0 512 512">
                                        <g fill-rule="evenodd" stroke-width="1pt">
                                            <path fill="#fff" d="M0 0h512v512H0z"/>
                                            <path fill="#009246" d="M0 0h170.7v512H0z"/>
                                            <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/>
                                        </g>
                                    </svg>
                                    Italiano
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="block py-2 px-4 text-sm text-zinc-700 hover:bg-zinc-100 dark:text-zinc-400 dark:hover:bg-zinc-600 dark:hover:text-white"
                               role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn"
                                         viewBox="0 0 512 512">
                                        <defs>
                                            <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/>
                                        </defs>
                                        <path fill="#de2910" d="M0 0h512v512H0z"/>
                                        <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)"
                                             xlink:href="#a"/>
                                        <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)"
                                             xlink:href="#a"/>
                                        <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)"
                                             xlink:href="#a"/>
                                        <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)"
                                             xlink:href="#a"/>
                                        <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)"
                                             xlink:href="#a"/>
                                    </svg>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
