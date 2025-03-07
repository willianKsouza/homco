@extends('layouts.default')
@section('title', 'Home')
@section('content')
    <section class="bg-zinc-400">
        <x-container>
            <div class="grid lg:grid-cols-2 justify-items-center gap-10 py-10 md:pt-20 pb-26 lg:pb-50">
                <div class="flex flex-col  sm:items-start gap-4">
                    <h1 class="text-sm font-semibold text-zinc-700">WELCOME TO HOMCO</h1>
                    <p class="text-5xl sm:text-7xl font-bold texte-center leading-15 sm:leading-20 lg:leading-25 max-w-xl">BUILD YOUR ELEGAN DREAM HOME INTERIOR</p>
                    <div>
                      <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                    <a class="inline-block max-w-[160px] px-8 py-4 bg-zinc-500 text-nowrap" href="#">Our Project</a>
                </div>
                <div class="lg:justify-self-end py-6">
                    <figure>
                        <img src="{{ asset('imgs/Polygon 1.png') }}" alt="">
                    </figure>
                </div>
            </div>
        </x-container>
    </section>
    <section class="mb-25">
      <x-container>
        <div class="flex flex-wrap lg:flex-nowrap justify-center -mt-20">
          <div class="flex flex-col gap-4 p-6 bg-zinc-900 ">
            <h1 class="font-black text-2xl">HOME DESIGN CONSULTATION</h1>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
            </div>
          </div>
          <div class="flex flex-col gap-4 p-6 bg-zinc-500">
            <h1 class="font-black text-2xl">HOME DESIGN 3D 2D INTERIOR SERVICE</h1>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
            </div>
          </div>
          <div class="flex flex-col gap-4 p-6 bg-zinc-900">
            <h1 class="font-black text-2xl">HOME DESIGN CONSULTATION</h1>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
            </div>
          </div>
        </div>
      </x-container>
    </section>
    <section class="mb-25">
      <x-container>
        <div class="grid lg:grid-cols-2 gap-4">
          <div class="bg-zinc-400"></div>
          <div class="relative flex flex-col gap-4">
            <div class="absolute p-2 -z-10">
              <img src="{{asset('imgs/bgIcon.png')}}" alt="" srcset="">
            </div>
            <p class="font-black text-lg text-gray-500 pt-6">WHO WE ARE</p>
            <h1 class="text-gray-900 text-4xl sm:text-5xl font-bold texte-center leading-14 md:leading-18 max-w-xl">WE ARE PERFECT TEAM FOR HOME INTERIOR DECORATION</h1>
            <div class="mb-4">
              <p class="text-lg text-gray-500 mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
              <p class="text-lg text-gray-500">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            </div>
            <div class="mb-8">
              <ul class="grid grid-cols-2 gap-4 text-gray-500">
                <li class="flex items-center gap-2">
                  <span><img src="{{asset('imgs/icon01.png')}}" alt="" srcset=""></span>
                  Flexible Time
                </li>
                <li class="flex items-center gap-2">
                  <span><img src="{{asset('imgs/icon01.png')}}" alt="" srcset=""></span>
                  Perfect Work
                </li>
                <li class="flex items-center gap-2">
                  <span><img src="{{asset('imgs/icon01.png')}}" alt="" srcset=""></span>
                  Client Priority
                </li>
                <li class="flex items-center gap-2">
                  <span><img src="{{asset('imgs/icon01.png')}}" alt="" srcset=""></span>
                  Flexible Time
                </li>
                <li class="flex items-center gap-2">
                  <span><img src="{{asset('imgs/icon01.png')}}" alt="" srcset=""></span>
                  Perfect Work
                </li>
                <li class="flex items-center gap-2">
                  <span><img src="{{asset('imgs/icon01.png')}}" alt="" srcset=""></span>
                  Client Priority
                </li>
              </ul>
            </div>
            <div>
              <ul class="flex justify-around text-gray-500">
                <li class="flex flex-col items-center gap-2">
                  <span class="text-5xl font-black">15Y</span>
                  <span class="font-semibold text-sm tracking-widest">Experience</span>
                </li>
                <li class="flex flex-col items-center gap-2">
                  <span class="text-5xl font-black">25+</span>
                  <span class="font-semibold text-sm tracking-widest">BEST TEAM </span>
                </li>
                <li class="flex flex-col items-center gap-2">
                  <span class="text-5xl font-black">500+</span>
                  <span class="font-semibold text-sm tracking-widest">TOTAL CLIENTE</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </x-container>
    </section>
    <section class="mb-25">
      <x-container>
        <div>
          <div class="relative flex flex-col gap-4 mb-18">
            <div class="absolute p-2 -z-10">
              <img src="{{asset('imgs/bgIcon.png')}}" alt="" srcset="">
            </div>
            <p class="font-black text-lg text-gray-500 pt-6">HOW WE WORK</p>
            <h1 class="text-gray-900 text-4xl sm:text-5xl font-bold texte-center max-w-xl">OUR WORK PROCEDURE</h1>
          </div>
          <div class="flex flex-wrap lg:flex-nowrap gap-8 justify-center">
            <div class="flex flex-col gap-4 p-6 bg-white text-zinc-900 shadow-xl">
              <div>
                <img src="{{asset('imgs/msgIcon.png')}}" alt="">
              </div>
              <h1 class="font-black text-2xl">CLIENT DESIGN<br> CONSULTATION</h1>
              <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
            <div class="flex flex-col gap-4 p-6 bg-zinc-500">
              <div>
                <img src="{{asset('imgs/designIcon.png')}}" alt="">
              </div>
              <h1 class="font-black text-2xl">PROTOTYPING HOME<br> DESIGN</h1>
              <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
            <div class="flex flex-col gap-4 p-6 bg-white text-zinc-900 shadow-xl">
              <div>
                <img src="{{asset('imgs/houseIcon.png')}}" alt="">
              </div>
              <h1 class="font-black text-2xl">PROCESSING TO DESIGN<br> HOME</h1>
              <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
          </div>
        </div>
      </x-container>
    </section>
    <section class="splide mb-25" aria-label="Splide Basic HTML Example">
      <div class="splide__track">
        <ul class="splide__list *:size-[305px] *:bg-zinc-500  gap-6">
          <li class="splide__slide"></li>
          <li class="splide__slide"></li>
          <li class="splide__slide"></li>
          <li class="splide__slide"></li>
          <li class="splide__slide"></li>
          <li class="splide__slide"></li>
        </ul>
      </div>
    </section>
    <section class="mb-25">
      <x-container>
        <div class="grid lg:grid-cols-2 gap-4 gap-y-16 lg:gap-y-0">
          <div class="flex flex-col justify-center  sm:items-start gap-4">
            <h1 class="text-sm font-black text-zinc-500">PERFECT PARTNER</h1>
            <p class="text-zinc-800 text-4xl sm:text-5xl font-bold texte-center leading-14 sm:leading-16 max-w-xl">WE HAVE PRIORITY FOR CAN CREATE DREAM HOME DESIGN</p>
            <div>
              <p class="text-zinc-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
            <a class="inline-block max-w-[150px] px-7 py-3 bg-zinc-500" href="#">Our Project</a>
        </div>
        <div class="grid md:block gap-y-6 place-items-center">
          <div class="md:ml-auto w-[70%] h-[350px]  bg-zinc-300"></div>
          <div class="md:mr-auto  md:-mt-40 w-[70%] h-[350px]  bg-zinc-100"></div>
          <div class="md:-mt-30 md:ml-auto w-[70%] h-[350px] bg-zinc-300"></div>
        </div>
        </div>
      </x-container>
    </section>
    <section class="mb-25">
        <div class="grid lg:grid-cols-2 gap-4 p-2">
            <div class="w-full h-full">
              <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4rQW0GUrLvU" frameborder="0" allowfullscreen></iframe>
            </div>
          <div class="relative flex flex-col gap-4 p-4 md:p-0">
            <div class="absolute -z-10">
              <img src="{{asset('imgs/bgIcon.png')}}" alt="" srcset="">
            </div>
            <p class="font-black text-lg text-gray-500 pt-6">TRUST US NOW</p>
            <h1 class="text-gray-900 text-4xl sm:text-5xl font-bold texte-center leading-14 md:leading-18 max-w-2xl">WHY CHOICE OUR HOME DESIGN INTERIOR<br> SERVICES</h1>
            <div class="mb-4">
              <p class="text-lg text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus<br> nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
            <div>
              <ul class="grid grid-cols-2 gap-4 text-gray-500">
                <li class="flex items-center gap-2">
                  <span>
                    <img src="{{asset('imgs/icon01.png')}}" alt="" srcset="">
                  </span>
                  Flexible Time
                </li>
                <li class="flex items-center gap-2">
                  <span>
                    <img src="{{asset('imgs/icon01.png')}}" alt="" srcset="">
                  </span>
                  Perfect Work
                </li>
                <li class="flex items-center gap-2">
                  <span>
                    <img src="{{asset('imgs/icon01.png')}}" alt="" srcset="">
                  </span>
                  Client Priority
                </li>
                <li class="flex items-center gap-2">
                  <span>
                    <img src="{{asset('imgs/icon01.png')}}" alt="" srcset="">
                  </span>
                  Flexible Time
                </li>
                <li class="flex items-center gap-2">
                  <span>
                    <img src="{{asset('imgs/icon01.png')}}" alt="" srcset="">
                  </span>
                  Perfect Work
                </li>
                <li class="flex items-center gap-2">
                  <span>
                    <img src="{{asset('imgs/icon01.png')}}" alt="" srcset="">
                  </span>
                  Client Priority
                </li>
              </ul>
            </div>
          </div>
        </div>
    </section>
    <section class="mb-25">
      <x-container>
        <div class="grid lg:grid-cols-2 gap-4">
          <div class="relative flex flex-col p-4 md:p-0">
            <div class="absolute -z-10">
              <img src="{{asset('imgs/bgIcon.png')}}" alt="" srcset="">
            </div>
            <p class="font-black text-lg text-gray-500 pt-6">CLIENTS FEEDBACK</p>
            <h1 class="text-gray-900 text-4xl sm:text-5xl font-bold texte-center leading-14 md:leading-18 max-w-2xl">OUR TESTIMONIAL FROM BEST CLIENTS</h1>
            <div>
              <p class="text-lg text-zinc-400">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
          </div>
          <div class="flex flex-col gap-4 p-4  shadow-xl">
            <span class="pt-3"><img src="{{asset('imgs/Star Rating.png')}}" alt="" srcset=""></span>
            <p class="text-lg text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <div class="flex items-center gap-4">
              <div>
                <div class="w-[96px] h-[96px] bg-zinc-400 rounded-full"></div>
              </div>
              <div class="flex flex-col gap-2 text-zinc">
                <span class="font-black text-lg text-gray-800 ">John De</span>
                <span class="text-lg text-gray-500">Art Director</span>
              </div>
            </div>
          </div>  
        </div>  
      </x-container>
    </section>
    <section class="relative z-20">
      <x-container class="sm:px-20">
        <div class="max-w-7xl mx-auto bg-white -mb-12">
          <div class="grid grid-cols-[repeat(auto-fit,minmax(200px,max-content))] place-content-around px-8">
            <figure>
              <img src="{{asset('imgs/sponsor1.png')}}" alt="" srcset="">
            </figure>
            <figure>
              <img src="{{asset('imgs/sponsor2.png')}}" alt="" srcset="">
            </figure>
            <figure>
              <img src="{{asset('imgs/sponsor3.png')}}" alt="" srcset="">
            </figure>
            <figure>
              <img src="{{asset('imgs/sponsor4.png')}}" alt="" srcset="">
            </figure>
          </div>
        </div>
      </x-container>
    </section>
    <section class="relative z-10">
      <x-container>
        <div>
          <div class="flex flex-col sm:items-start gap-2 bg-zinc-500 px-16 pt-28 pb-8 -mb-50 ">
            <p class="max-w-7xl text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-15 sm:leading-18 lg:leading-25 ">LETS CHANGE YOUR OWN HOME INTERIOR DESIGN NOW</p>
            <a class="inline-block max-w-[160px] px-8 py-4 bg-zinc-900 text-nowrap" href="#">Our Project</a>
            
        </div>
        </div>
      </x-container>
    </section>
    <div class="bg-zinc-900 h-[260px] -z-20">
    </div>
@endsection
