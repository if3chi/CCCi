    <nav class="p-2 relative px-4 py-4 flex justify-between items-center">
        <a class="text-3xl font-bold leading-none" href="#">
            <x-logo class="z-10" />
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3" @click="open = ! open">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>

        <button type="button" @click="open = ! open"
            class="hidden lg:flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-200">
            <svg class="flex-shrink-0 w-6 h-6 text-blue-900 transition duration-75 dark:text-blue-900 group-hover:text-blue-700 dark:group-hover:text-white"
                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                </path>
            </svg>
        </button>
    </nav>
    <!--Mobile navigation-->

    <div class="navbar-menu relative z-50 flex self-end justify-end" x-show="open" x-cloak="">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav
            class="fixed top-0 right-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="/">
                    <x-logo />
                </a>
                <button type="button" class="navbar-close cursor-pointer" @click="open = ! open">
                    <svg class="h-6 w-6 text-blue-800 cursor-pointer hover:text-blue-900"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-900 rounded"
                            href="#">CCCI - Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-900 rounded"
                            href="#">Church</a>
                    </li>

                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-900 rounded"
                            href="#">Connect</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-900 rounded"
                            href="#">Contact</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-800 hover:bg-blue-50 hover:text-blue-900 rounded"
                            href="#">Gallery</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6">
                    <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-900 hover:bg-blue-700 rounded-xl drop-shadow-lg"
                        href="#">
                        Join us this sunday
                    </a>
                </div>
                <p class="my-4 text-xs text-center text-gray-400">
                    Copyright &copy;
                    <span x-text="new Date().getFullYear()"></span> CCCI
                </p>
            </div>
        </nav>
    </div>
