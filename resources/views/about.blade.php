@extends('layouts.main')

@section('title', 'About')

@section('content')
<div>
    <div class="bg-secondary">
        <img src="{{ asset('/img/about.png') }}" class="w-full h-full pt-80" alt="about image"/>
    </div>
    <div class="bg-secondary h-section-43">
        <h2 class="text-center font-header text-2xl text-white font-semibold text-primary sm:text-5xl lg:text-2xl pt-32">
            Dónde Estamos
        </h2>
        <div class="container flex flex-row inset-x-0 justify-between">
            <div>
                <img src="{{ asset('/img/Ellipse 1.png') }}" class="w-auto h-auto pt-24" alt="about image"/>
            </div>
            <div>
                <img src="{{ asset('/img/Ellipse 1.png') }}" class="w-auto h-auto pt-24" alt="about image"/>
            </div>
            <div>
                <img src="{{ asset('/img/Ellipse 1.png') }}" class="w-auto h-auto pt-24" alt="about image"/>
            </div>
        </div>
    </div>
    <div class="container pt-16 md:pt-20">
        <div class="mx-auto w-5/6 bg-white py-16 md:w-11/12 lg:py-20 xl:py-24 2xl:w-full">
            <div class="grid grid-cols-3 gap-3 md:gap-3 xl:grid-cols-3 xl:gap-3">    
                <div class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-col md:text-left lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/about_logo_01.png') }}"class="w-auto h-auto" alt="icon happy clients"/>
                    </div>
                </div>
                <div class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-col md:text-left lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/about_logo_02.png') }}"class="w-auto h-auto" alt="icon puzzle"/>
                    </div>
                </div>
                <div class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-col md:text-left lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/about_logo_03.png') }}"class="w-auto h-auto" alt="icon puzzle"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection