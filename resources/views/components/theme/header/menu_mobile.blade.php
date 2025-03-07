<div class="lg:hidden" x-data="menuMobile">
    <div @click="toggle()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-align-justify">
            <path d="M3 12h18" />
            <path d="M3 18h18" />
            <path d="M3 6h18" />
        </svg>
    </div>
    <div x-show="menuOpen" class="absolute top-0 left-0 w-[50%] bg-zinc-700 opacity-90 py-6">
        <div class="flex flex-col gap-4">
            <div class="relative px-4">
                <h1 class="font-semibold">Menu</h1>
                <button @click="menuOpen = false" class="absolute -top-2 right-3 p-2 bg-gray-950 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-x">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
            <ul class="flex flex-col">
                <li class="py-4 font-semibold text-lg active:bg-gray-900 px-4 uppercase">
                    <a href="">home</a>
                </li>
                <li class="py-4 font-semibold text-lg active:bg-gray-900 px-4 uppercase">
                    <a href="">about us</a>
                </li>
                <li class="py-4 font-semibold text-lg active:bg-gray-900 px-4 uppercase">
                    <a href="">our services</a>
                </li>
                <li @click="open === 1 ? open = false : open = 1" class="py-4 font-semibold text-lg px-4 uppercase">
                    <a class="flex gap-1 items-center text-nowrap" href="#">our projects 
                        <svg
                            :class="open === 1 ? 'rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </a>
                    <ul x-cloak x-show="open === 1" x-transition class="flex flex-col gap-2 mt-2">
                        <li><a href="" class="block px-4 py-2 uppercase">Project 1</a></li>
                        <li><a href="" class="block px-4 py-2 uppercase">Project 2</a></li>
                        <li><a href="" class="block px-4 py-2 uppercase">Project 3</a></li>
                        <li><a href="" class="block px-4 py-2 uppercase">Project 4</a></li>
                        <li><a href="" class="block px-4 py-2 uppercase">Project 5</a></li>
                        <li><a href="" class="block px-4 py-2 uppercase">Project 6</a></li>
                    </ul>
                </li>
                <li class="py-4 font-semibold text-lg active:bg-gray-900 px-4 uppercase">
                    <a href="#">portifolio</a>
                </li>
                <li @click="open === 2 ? open = false : open = 2" class="group py-4 font-semibold text-lg  px-4 uppercase">
                    <a class="flex gap-1 items-center" href="#">pages
                        <svg :class="open === 2 ? 'rotate-180' : ''" 
                            xmlns="http://www.w3.org/2000/svg"     width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-down">
                            <path d="m6 9 6 6 6-6" />
                        </svg>
                    </a>
                    <ul x-cloak x-show="open === 2" x-transition class="flex flex-col gap-2 mt-2">
                        <li><a href="" class="block px-4 py-2 uppercase">Page 1</a></li>
                        <li><a href="" class="block px-4 py-2 uppercase">Page 2</a></li>
                        <li><a href="" class="block px-4 py-2 uppercase">Page 3</a></li>
                        <li><a href="" class="block px-4 py-2 uppercase">Page 4</a></li>
                        <li><a href="" class="block px-4 py-2 uppercase">Page 5</a></li>
                        <li><a href="" class="block px-4 py-2 uppercase">Page 6</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
