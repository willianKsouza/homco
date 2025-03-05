<header x-data="{ open: false }" class="bg-zinc-400 border-b border-white/50 relative">
    <x-container>
        <div class="flex justify-between items-center max-lg:py-4 font-poppins">
            <div>
                <img src="{{ asset('imgs/Logo Homco 1.png') }}" alt="" srcset="">
            </div>
            <nav class="hidden lg:block">
                <ul class="flex items-center gap-4">
                    <li class="flex items-center md:px-2 h-[100px] font-semibold text-lg hover:bg-gray-700">
                        <a class="uppercase" href="">home</a>
                    </li>
                    <li class="flex items-center md:px-2 h-[100px] font-semibold text-lg hover:bg-gray-700">
                        <a class="uppercase" href="">about us</a>
                    </li>
                    <li class="flex items-center md:px-2 h-[100px] font-semibold text-lg hover:bg-gray-700">
                        <a class="uppercase" href="">our services</a>
                    </li>
                    <li class="relative group flex items-center md:px-2 h-[100px] font-semibold text-lg hover:bg-gray-700">
                        <a class="flex gap-1 items-center uppercase" href="">our projects 
                            <svg
                                class="group-hover:rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-down">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </a>
                        <ul class="absolute left-0 right-0 top-24 mt-1 bg-zinc-400  text-white shadow-lg hidden group-hover:block w-full">
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Project 1</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Project 2</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Project 3</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Project 4</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Project 5</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Project 6</a>
                            </li>
                        </ul>
                    </li>
                    <li class="flex items-center md:px-2 h-[100px] font-semibold text-lg hover:bg-gray-700">
                        <a class="uppercase" href="">portifolio</a>
                    </li>
                    <li class="relative group flex items-center md:px-2 h-[100px] font-semibold text-lg hover:bg-gray-700">
                        <a class="flex gap-1 items-center uppercase" href="">pages
                            <svg
                            class="group-hover:rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-down">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </a>
                        <ul class="absolute left-0 right-0 top-24 mt-1 bg-zinc-400 text-white shadow-lg hidden group-hover:block w-full">
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Page 1</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Page 2</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Page 3</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Page 4</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Page 5</a>
                            </li>
                            <li>
                                <a href="" class="block px-4 py-2 hover:bg-gray-700 uppercase">Page 6</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <x-theme.header.menu_mobile />
        </div>
    </x-container>
</header>
