@extends('layouts.default')
@section('title', 'About Us')
@section('content')
    <section  class="bg-zinc-400">
        <x-container>
            <div>
                <h1 class="text-5xl sm:text-7xl font-bold texte-center leading-15 sm:leading-20 lg:leading-25 max-w-xl uppercase">About Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus<br> nec ullamcorper mattis, pulvinar dapibus leo.</p>
            </div>
            <div class="absolute p-2 -z-10">
                <img src="{{asset('imgs/bgIcon.png')}}" alt="" srcset="">
            </div>
            
        </x-container>
    </section>
@endsection