<footer class="bg-zinc-900 h-[530px] -z-20">
    <x-container>
        <div class="grid grid-cols-2 text-zinc-300">
            <div class="flex flex-col gap-4">
                <h1 class="font-black text-2xl">INFORMATION</h1>
                <p class="text-lg text-zinc-400">Lorem ipsum dolor sit amet, consectetur<br> adipiscing elit. Ut elit tellus, luctus nec<br> ullamcorper mattis, pulvinar dapibus leo.</p>
                <ul class="flex gap-4">
                    <li>
                      <img src="{{asset('imgs/facebookIcon.png')}}" alt="" srcset="">
                    </li>
                    <li>
                      <img src="{{asset('imgs/xIcon.png')}}" alt="" srcset="">
                    </li>
                    <li>
                      <img src="{{asset('imgs/instaIcon.png')}}" alt="" srcset="">
                    </li>
                    <li>
                      <img src="{{asset('imgs/inIcon.png')}}" alt="" srcset="">
                    </li>
                  </ul>
            </div>
            <div class="grid grid-cols-2 ">
                <nav>
                    <h1 class="font-black text-2xl">NAVIGATION</h1>
                    <ul class="space-y-4 mt-2">
                        <li class="flex items-center gap-1 text-lg text-zinc-400">
                            <svg
                            class="rotate-270" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-down">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                            Homepage
                        </li>
                        <li class="flex items-center gap-1 text-lg text-zinc-400">
                            <svg
                            class="rotate-270" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-down">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                            About Us
                        </li>
                        <li class="flex items-center gap-1 text-lg text-zinc-400">
                            <svg
                            class="rotate-270" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-down">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                            Services
                        </li>
                        <li class="flex items-center gap-1 text-lg text-zinc-400">
                            <svg
                            class="rotate-270" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-chevron-down">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                            Project
                        </li>
                    </ul>
                </nav>
                <div class="space-y-4">
                    <h1 class="font-black text-2xl">CONTACT US</h1>
                    <ul>
                        <li class="grid grid-cols-[30px_1fr] items-center">
                            <span><img src="{{asset('imgs/localization.png')}}" alt="" srcset=""></span>
                            <span class="text-lg">Lumbung Hidup East Java</span>
                        </li>
                        <li class="grid grid-cols-[30px_1fr] items-center">
                            <span><img src="{{asset('imgs/msg.png')}}" alt="" srcset=""></span>
                            <span class="text-lg">Hello@Homco.com</span>
                        </li>
                    </ul>
                        <form class="space-y-4">
                            <input class="bg-zinc-600 py-6 px-6" type="text" placeholder="Email Address" class="bg-zinc-800 text-zinc-300 rounded-md">
                            <button class="bg-zinc-500 text-zinc-300 py-6 px-16">SUBSCRIBE</button>
                        </form>
                </div>
            </div>
        </div>
    </x-container>
</footer>