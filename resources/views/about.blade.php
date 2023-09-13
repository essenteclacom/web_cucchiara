@extends('layouts.main')

@section('title', 'About')

@section('content')
    {{-- slide --}}
    <div>
        <div class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('/img/bg_about.png')}}')">
            <div class="container relative z-30 pb-hero-9">
                <div class="flex flex-col items-center justify-center">
                    <div class="pt-20">
                        <h2 class="text-center font-header text-3xl text-white font-bold text-primary">
                            Nuestra Historia
                        </h2>
                        <div class="pt-10">
                            <p class="font-body text-lg text-white text-center">
                                Cucchiara y Cía. S.A. tiene una rica historia dentro del mercado de valores argentino, lo<br>que refuerza su amplia experiencia en la industria.
                            </p>
                            <div class="absolute bg-contain bg-center bg-no-repeat mx-auto inset-0 w-auto h-auto" style="background-image: url('{{ asset('/img/map_about.png')}}')">
                            </div>
                        </div>
                    </div>
                    <div class="h-[40rem] w-[60rem] sm:h-120"></div>
                </div>
            </div>
        </div>
        <div class="container relative top-minus-30">
            <div class="pb-10">
                <h2 class="text-center font-header text-2xl text-white font-semibold text-primary sm:text-5xl lg:text-2xl">
                    Dónde Estamos
                </h2>
            </div>
            <div class="grid grid-cols-5 gap-12">
                <div>
                </div>
                <div class="flex items-center justify-center group z-50">
                    <div style="background-image: url({{ asset('/img/ObeliscoBA2015.jpg')}})" class="w-52 rounded-full group relative h-52 bg-cover bg-center bg-no-repeat">
                        <span class="rounded-full absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <span class="hidden group-hover:block z-1 rounded-full text-center text-xl text-white mx-auto inset-0 pt-24">
                            Buenos Aires
                        </span>
                    </div>
                </div>
                <div class="flex items-center justify-center group z-50">
                    <div style="background-image: url({{ asset('/img/uruguay.jpg')}})" class="w-52 rounded-full group relative h-52 bg-cover bg-center bg-no-repeat">
                        <span class="rounded-full absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <span class="hidden group-hover:block z-1 rounded-full text-center text-xl text-white mx-auto inset-0 pt-24">
                            Montevideo
                        </span>
                    </div>
                </div>
                <div class="flex items-center justify-center group z-50">
                    <div style="background-image: url({{ asset('/img/nuevazelanda.jpg')}})" class="w-52 rounded-full group relative h-52 bg-cover bg-center bg-no-repeat">
                        <span class="rounded-full absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <span class="hidden group-hover:block z-1 rounded-full text-center text-xl text-white mx-auto inset-0 pt-24">
                            Auckland
                        </span>
                    </div>
                </div>
                <div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-12 pt-10">    
                <div>
                </div>
                <div class="flex items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/about_logo_01.png') }}"class="w-auto h-auto" alt="icon happy clients"/>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/about_logo_02.png') }}"class="w-auto h-auto" alt="icon puzzle"/>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/about_logo_03.png') }}"class="w-auto h-auto" alt="icon puzzle"/>
                    </div>
                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
@endsection
