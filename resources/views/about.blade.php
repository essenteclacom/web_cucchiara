@extends('layouts.main')

@section('title', 'About')

@section('content')
<div>
    <div class="bg-secondary">
        <img src="{{ asset('/img/about.png') }}" class="w-full h-full pt-80" alt="about image"/>
    </div>
    <div class="bg-secondary h-section-43 mb-32">
        <h2 class="text-center font-header text-2xl text-white font-semibold text-primary sm:text-5xl lg:text-2xl pt-32">
            Nuestro Equipo
        </h2>
        <div class="container flex flex-row inset-x-0 justify-between absolute">
            <div class="ml-48">
                <img src="{{ asset('/img/Ellipse 1.png') }}" class="w-auto h-auto pt-24" alt="about image"/>
            </div>
            <div>
                <img src="{{ asset('/img/Ellipse 1.png') }}" class="w-auto h-auto pt-24" alt="about image"/>
            </div>
            <div class="mr-48">
                <img src="{{ asset('/img/Ellipse 1.png') }}" class="w-auto h-auto pt-24" alt="about image"/>
            </div>
        </div>
    </div>
    <div class="container py-16 md:py-20" id="services">
        <h2 class="text-center font-header text-color-cucchiara text-2xl font-semibold text-primary sm:text-5xl lg:text-2xl">
            Presencial Internacional
        </h2>
        <div class="container">
            <div class="mx-auto w-5/6 bg-white py-16 md:w-11/12 lg:py-20 xl:py-24 2xl:w-full">
                <div class="grid grid-cols-2 gap-2 md:gap-2 xl:grid-cols-2 xl:gap-2 pb-8">
                    <div class="flex flex-col items-center justify-center text-center md:flex-col md:text-left">
                        <div>
                            <img src="{{ asset('/img/Cucchiara.png') }}" class="w-auto h-auto" alt="icon project"/>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center text-center md:flex-col md:text-left">
                        <div>
                            <img src="{{ asset('/img/Sekoia.png') }}" class="w-auto h-auto" alt="icon award"/>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-3 md:gap-3 xl:grid-cols-3 xl:gap-3">    
                    <div class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-col md:text-left lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/CyC fondos.png') }}"class="w-auto h-auto" alt="icon happy clients"/>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-col md:text-left lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/Cucchiara NZ.png') }}"class="w-auto h-auto" alt="icon puzzle"/>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-col md:text-left lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/CyC Cambios.png') }}"class="w-auto h-auto" alt="icon puzzle"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection