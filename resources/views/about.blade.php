@extends('layouts.main')

@section('title', 'About')

@section('content')
    {{-- slide --}}
    <div>
        <div class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('/img/mapa.png')}}')">
            <div class="container relative z-30 pb-hero-16 sm:pb-hero-48 lg:pb-hero-48">
                <div class="flex flex-col items-center justify-center">
                    <div class="pt-20 sm:pt-20 lg:pt-20">
                        <h2 class="text-center font-header text-2xl text-white font-semibold text-primary sm:text-5xl lg:text-2xl">
                            Nuestra Historia
                        </h2>
                        <div class="pt-10">
                            <p class="font-body text-lg text-white text-center">
                                Cucchiara y Cía. S.A. tiene una rica historia dentro del mercado de valores argentino, lo que refuerza su amplia experiencia en la industria.
                            </p>
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
            <div class="grid grid-cols-3 gap-3 md:gap-3 xl:grid-cols-3 xl:gap-3">
                <div class="flex items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/Ellipse 1.png') }}" class="w-auto h-auto" alt="about image"/>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/Ellipse 1.png') }}" class="w-auto h-auto" alt="about image"/>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/Ellipse 1.png') }}" class="w-auto h-auto" alt="about image"/>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3 gap-3 md:gap-3 xl:grid-cols-3 xl:gap-3 pt-10">    
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
            </div>
        </div>
    </div>
@endsection
