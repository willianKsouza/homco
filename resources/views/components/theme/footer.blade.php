<footer class="bg-zinc-900 -z-20">
    <x-container>
        <div class="grid sm:grid-cols-2 gap-8 text-zinc-300">
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
            <div class="grid md:grid-cols-2 gap-4">
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
                        <form class="flex flex-col items-start gap-4">
                            <input class="max-w-full bg-zinc-600 py-6 px-4" type="text" placeholder="Email Address" class="bg-zinc-800 text-zinc-300">
                            <button class="bg-zinc-500 text-zinc-300 py-4 px-8 ">SUBSCRIBE</button>
                        </form>
                </div>
            </div>
            <div class="md:col-span-2 border-t">
                <x-container>
                    <div class="grid md:grid-cols-2 justify-items-center md:justify-items-normal py-8">
                        <h1 class="font-semibold text-xs md:text-lg uppercase tracking-wider">Allright Reserved - Homco Interior</h1>
                        <ul class="flex gap-8 md:gap-12 justify-self-auto md:justify-self-end">
                            <li class="font-semibold text-xs md:text-lg uppercase tracking-wider">DIsclaimer</li>
                            <li class="font-semibold text-xs md:text-lg uppercase tracking-wider text-nowrap">Privacy Policy
                            </li>
                            <li class="font-semibold text-xs md:text-lg uppercase tracking-wider text-nowrap">
                                Term Of Use
                            </li>
                        </ul>
                    </div>
                </x-container>
            </div>
        </div>
    </x-container>
</footer>