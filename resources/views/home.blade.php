@extends('layouts.main')

@section('title', 'Home')

@section('content')
    {{-- slide --}}
    <div>
        <div class="relative bg-cover bg-center bg-no-repeat py-8" style="background-image: url('{{ asset('/img/Fondo completo linea.jpg')}}">
            <div class="absolute inset-0 z-20 bg-gradient-to-r bg-center bg-no-repeat"></div>
            <div class="container relative z-30 pt-20 pb-hero-16 sm:pt-56 sm:pb-hero-48 lg:pt-64 lg:pb-hero-48">
                <div class="flex flex-col items-center justify-center lg:flex-row">
                    <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
                        <h1 class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl">
                            Soluciones Financieras Integrales
                        </h1>
                        <div class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">
                            <div class="flex items-center justify-center pl-0 sm:justify-start md:pl-1">
                                <p class="font-body text-lg text-white">
                                    Te acompañamos a tomar las mejores decisiones de inversión, ofreciéndote una amplia gama de instrumentos financieros según tu objetivo, plazo y perfil de riesgo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="h-[30rem] w-[60rem] sm:h-120">
                    </div>
                    {{-- pendiente de verificar
                    <div class="">
                        <img src="{{ asset('/img/slider_01.png') }}" class="h-[30rem] w-[60rem] sm:h-120" alt="author"/>
                    </div>--}}
                </div>
                <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
                    <span class="text-xl text-white font-bold">
                        Nosotros
                    </span>
                    <p class="font-body text-lg text-white"> 
                        Cucchiara y Cía. S. A. es un Agente de Negociación, Liquidación y Compensación que ofrece servicios integrales de gestión de carteras de inversión fomentando relaciones directas con sus clientes, individuales o corporativos, proporcionando soluciones financieras guiadas por la prudencia, transparencia, y responsabilidad.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    {{-- cards --}}
    <div class="container py-36 md:py-36 absolute inset-x-0 top-card-2 fieldset z-30 lg:pl-12" id="services">
        <h3 class="text-white text-left font-header text-xl font-bold text-primary sm:text-xl lg:text-xl">
            Lo que hacemos
        </h3>    
        <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-2">
            <div class="group rounded px-8 py-12 shadow-amplia bg-white hover:bg-primary flex flex-row">
                <div class="text-center">
                    <h3 class="text-color-cucchiara pt-8 text-lg font-bold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        Administración de cartera
                    </h3>
                </div>
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/card_01.png') }}" alt="development icon"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/card_01.png') }}" alt="development icon"/>
                    </div>
                </div>
            </div>
            <div class="group rounded px-8 py-12 shadow-amplia bg-white hover:bg-primary flex flex-row">
                <div class="text-center">
                    <h3 class="text-color-cucchiara pt-8 text-lg font-bold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        Research
                    </h3>
                </div>
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/card_02.png') }}"alt="content marketing icon"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/card_02.png') }}"alt="content marketing icon"/>
                    </div>
                </div>
            </div>
            <div class="group rounded px-8 py-12 shadow-amplia bg-white hover:bg-primary flex flex-row">
                <div class="text-center">
                    <h3 class="text-color-cucchiara pt-8 text-lg font-bold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        Operaciones financieras
                    </h3>
                </div>
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/card_03.png') }}"alt="Mobile Application icon"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/card_03.png') }}"alt="Mobile Application icon"/>
                    </div>
                </div>
            </div>
            <div class="group rounded px-8 py-12 shadow-amplia bg-white hover:bg-primary flex flex-row">
                <div class="text-center">
                    <h3 class="text-color-cucchiara pt-8 text-lg font-bold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        Fondos comunes de inversión
                    </h3>
                </div>
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/card_04.png') }}"alt="Email Marketing icon"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/card_04.png') }}"alt="Email Marketing icon"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end cards --}}
    <div class="h-section-43"></div>
    {{-- open account --}}
    <div class="container py-16 md:py-20" id="services">
        <h3 class="text-center font-header text-xl font-bold text-primary sm:text-xl lg:text-xl">
            Abrí tu cuenta hoy
        </h3>
        <div class="container">
            <div class="mx-auto w-5/6 bg-white py-16 md:w-11/12 lg:py-20 xl:py-24 2xl:w-full">
                <div class="grid grid-cols-2 gap-5 md:gap-8 xl:grid-cols-4 xl:gap-5">
                    <div class="flex flex-col items-center justify-center text-center md:flex-col md:text-left">
                        <div>
                            <img src="{{ asset('/img/open_account_01.png') }}" class="mx-auto h-12 w-auto md:h-20" alt="icon project"/>
                        </div>
                        <div class="pt-5 md:pl-5 md:pt-0">
                            <h4 class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                Abrí tu cuenta
                            </h4>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center text-center md:flex-col md:text-left">
                        <div>
                            <img src="{{ asset('/img/open_account_02.png') }}" class="mx-auto h-12 w-auto md:h-20" alt="icon award"/>
                        </div>
                        <div class="pt-5 md:pl-5 md:pt-0">
                            <h4 class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                Asesorate
                            </h4>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-col md:text-left lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/open_account_03.png') }}"class="mx-auto h-12 w-auto md:h-20" alt="icon happy clients"/>
                        </div>
                        <div class="pt-5 md:pl-5 md:pt-0">
                            <h4 class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                Definí tu cartera de inversión
                            </h4>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-col md:text-left lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/open_account_04.png') }}"class="mx-auto h-12 w-auto md:h-20" alt="icon puzzle"/>
                        </div>
                        <div class="pt-5 md:pl-5 md:pt-0">
                            <h4 class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                Monitoreá tus inversiones
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end open account --}}
    {{-- need --}}
    <div class="bg-quarter" id="about">
        <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
            <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
                <div class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start">
                    <div class="flex items-center justify-center sm:justify-start">
                        <h2 class="font-header text-4xl font-semibold uppercase text-white sm:text-5xl lg:text-6xl">
                            ¿Qué necesitas para abrir tu cuenta?                  
                        </h2>
                    </div>
                </div>
            </div>
            <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
                <div>
                    <div class="flex items-end justify-between">
                        <div class="gradient-cucciara group rounded px-8 py-0 shadow hover:bg-primary">
                            <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                <div>
                                    <img src="{{ asset('/img/persona.png') }}" alt="development icon"/>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="pt-8 text-lg font-semibold uppercase text-primary text-white lg:text-xl">
                                    Personas Físicas
                                </h3>
                            </div>
                        </div>
                        <div class="gradient-cucciara group rounded px-8 py-0 shadow hover:bg-primary">
                            <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                                <div>
                                    <img src="{{ asset('/img/contrato.png') }}" alt="development icon"/>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3 class="pt-8 text-lg font-semibold uppercase text-primary text-white lg:text-xl">
                                    Personas Jurídicas
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end need --}}
    {{-- old --}}
    {{-- old 
    <div class="container py-16 md:py-20" id="services">
        <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
            Here's what I'm good at
        </h2>
        <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            These are the services Ioffer
        </h3>
        <div class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3">
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/icon-development-white.svg') }}" alt="development icon"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/icon-development-black.svg') }}" alt="development icon"/>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        WEB DEVELOPMENT
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/icon-content-white.svg') }}"alt="content marketing icon"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/icon-content-black.svg') }}"alt="content marketing icon"/>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        Technical Writing
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/icon-mobile-white.svg') }}"alt="Mobile Application icon"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/icon-mobile-black.svg') }}"alt="Mobile Application icon"/>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        Mobile Development
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/icon-email-white.svg') }}"alt="Email Marketing icon"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/icon-email-black.svg') }}"alt="Email Marketing icon"/>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        Email Development
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/icon-design-white.svg') }}"alt="Theme Design icon"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/icon-design-black.svg') }}"alt="Theme Design icon"/>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        Graphic Design
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
            <div class="group rounded px-8 py-12 shadow hover:bg-primary">
                <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/icon-graphics-white.svg') }}"alt="Graphic Design icon"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/icon-graphics-black.svg') }}"alt="Graphic Design icon"/>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl">
                        Web Design
                    </h3>
                    <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-16 md:py-20" id="portfolio">
        <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
            Check out my Portfolio
        </h2>
        <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            Here's what I have done with the past
        </h3>
        <div class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2">
            <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                <img src="{{ asset('/img/portfolio-apple.jpeg') }}" class="w-full shadow" alt="portfolio image"/>
            </a>
            <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                <img src="{{ asset('/img/portfolio-stripe.jpeg') }}" class="w-full shadow" alt="portfolio image" />
            </a>
            <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                <img src="{{ asset('/img/portfolio-fedex.jpeg') }}" class="w-full shadow" alt="portfolio image"/>
            </a>
            <a href="/" class="mx-auto transform transition-all hover:scale-105 md:mx-0">
                <img src="{{ asset('/img/portfolio-microsoft.jpeg') }}" class="w-full shadow" alt="portfolio image"/>
            </a>
        </div>
    </div>
    <div class="bg-grey-50" id="clients">
        <div class="container py-16 md:py-20">
            <div class="mx-auto w-full sm:w-3/4 lg:w-full">
                <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                    My latest clients
                </h2>
                <div class="flex flex-wrap items-center justify-center pt-4 sm:pt-4">
                    <span class="m-8 block">
                        <img src="{{ asset('/img/logo-coca-cola.svg') }}"alt="client logo" class="mx-auto block h-12 w-auto"/>
                    </span>
                    <span class="m-8 block">
                        <img src="{{ asset('/img/logo-apple.svg') }}"alt="client logo" class="mx-auto block h-12 w-auto"/>
                    </span>
                    <span class="m-8 block">
                        <img src="{{ asset('/img/logo-netflix.svg') }}"alt="client logo" class="mx-auto block h-12 w-auto"/>
                    </span>
                    <span class="m-8 block">
                        <img src="{{ asset('/img/logo-amazon.svg') }}"alt="client logo" class="mx-auto block h-12 w-auto"/>
                    </span>
                    <span class="m-8 block">
                        <img src="{{ asset('/img/logo-stripe.svg') }}"alt="client logo" class="mx-auto block h-12 w-auto"/>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-16 md:py-20" id="work">
        <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
            My work experience
        </h2>
        <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            Here's what I did before freelancing
        </h3>
        <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
            <span class="left-2/5 absolute inset-y-0 ml-10 hidden w-0.5 bg-grey-40 md:block"></span>
            <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                <div class="md:w-2/5">
                    <div class="flex justify-center md:justify-start">
                        <span class="shrink-0">
                            <img src="{{ asset('/img/logo-spotify.svg') }}"class="h-auto w-32" alt="company logo"/>
                        </span>
                        <div class="relative ml-3 hidden w-full md:block">
                            <span class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                        </div>
                    </div>
                </div>
                <div class="md:w-3/5">
                    <div class="relative flex md:pl-18">
                        <span class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                        <div class="mt-1 flex">
                            <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                            <div class="md:-mt-1 md:pl-8">
                                <span class="block font-body font-bold text-grey-40">Apr 2015 - Mar 2018</span>
                                <span class="block pt-2 font-header text-xl font-bold uppercase text-primary">Frontend Developer</span>
                                <div class="pt-2">
                                    <span class="block font-body text-black">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                <div class="md:w-2/5">
                    <div class="flex justify-center md:justify-start">
                        <span class="shrink-0">
                            <img src="{{ asset('/img/logo-microsoft.svg') }}"class="h-auto w-32" alt="company logo"/>
                        </span>
                        <div class="relative ml-3 hidden w-full md:block">
                            <span class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                        </div>
                    </div>
                </div>
                <div class="md:w-3/5">
                    <div class="relative flex md:pl-18">
                        <span class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                        <div class="mt-1 flex">
                            <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                            <div class="md:-mt-1 md:pl-8">
                                <span class="block font-body font-bold text-grey-40">Mar 2018 - September 2019</span>
                                <span class="block pt-2 font-header text-xl font-bold uppercase text-primary">Software Engineer</span>
                                <div class="pt-2">
                                    <span class="block font-body text-black"> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
                <div class="md:w-2/5">
                    <div class="flex justify-center md:justify-start">
                        <span class="shrink-0">
                            <img src="{{ asset('/img/logo-fedex.svg') }}"class="h-auto w-32" alt="company logo"/>
                        </span>
                        <div class="relative ml-3 hidden w-full md:block"> 
                            <span class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"></span>
                        </div>
                    </div>
                </div>
                <div class="md:w-3/5">
                    <div class="relative flex md:pl-18">
                        <span class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"></span>
                        <div class="mt-1 flex">
                            <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
                            <div class="md:-mt-1 md:pl-8">
                                <span class="block font-body font-bold text-grey-40">
                                    October 2019 - Feb 2021
                                </span>
                                <span class="block pt-2 font-header text-xl font-bold uppercase text-primary">
                                    DevOps Engineer
                                </span>
                                <div class="pt-2">
                                    <span class="block font-body text-black">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-cover bg-top bg-no-repeat pb-16 md:py-16 lg:py-24" style="background-image: url({{ asset('/img/experience-figure.png')}})" id="statistics">
        <div class="container">
            <div class="mx-auto w-5/6 bg-white py-16 shadow md:w-11/12 lg:py-20 xl:py-24 2xl:w-full">
                <div class="grid grid-cols-2 gap-5 md:gap-8 xl:grid-cols-4 xl:gap-5">
                    <div class="flex flex-col items-center justify-center text-center md:flex-row md:text-left">
                        <div>
                            <img src="{{ asset('/img/icon-project.svg') }}" class="mx-auto h-12 w-auto md:h-20" alt="icon project"/>
                        </div>
                        <div class="pt-5 md:pl-5 md:pt-0">
                            <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
                                12
                            </h1>
                            <h4 class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                Finished Projects
                            </h4>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center text-center md:flex-row md:text-left">
                        <div>
                            <img src="{{ asset('/img/icon-award.svg') }}" class="mx-auto h-12 w-auto md:h-20" alt="icon award"/>
                        </div>
                        <div class="pt-5 md:pl-5 md:pt-0">
                            <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
                                3
                            </h1>
                            <h4 class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                Awards Won
                            </h4>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-row md:text-left lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/icon-happy.svg') }}"class="mx-auto h-12 w-auto md:h-20" alt="icon happy clients"/>
                        </div>
                        <div class="pt-5 md:pl-5 md:pt-0">
                            <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
                                8
                            </h1>
                            <h4 class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                Happy Clients
                            </h4>
                        </div>
                    </div>
                    <div class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-row md:text-left lg:mt-0">
                        <div>
                            <img src="{{ asset('/img/icon-puzzle.svg') }}"class="mx-auto h-12 w-auto md:h-20" alt="icon puzzle"/>
                        </div>
                        <div class="pt-5 md:pl-5 md:pt-0">
                            <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
                                99
                            </h1>
                            <h4 class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl">
                                Bugs Fixed
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
     {{-- end old --}} 
     {{-- last research --}}
    <div class="bg-white" id="blog">
        <div class="container py-16 md:py-20">
            <h3 class="text-left font-header text-xl font-bold sm:text-xl lg:text-xl text-color-cucchiara">
                Últimos Informes de Research
            </h3>
            <div class="mx-auto grid w-full grid-cols-1 gap-6 pt-12 sm:w-3/4 lg:w-full lg:grid-cols-3 xl:gap-10">
                <a href="/post" class="shadow-amplia bg-white rounded-xl">
                    <div style="background-image: url({{ asset('/img/post-01.png')}})" class="rounded-top-xl group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                        <span class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <span class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base">
                            Leer nota
                        </span>
                    </div>
                    <div class="bg-white py-6 px-5 xl:py-8 rounded-xl">
                        <span class="block font-body text-lg font-semibold text-color-cucchiara">
                            Compañia general de combustible
                        </span>
                        <span class="block pt-2 font-body text-grey-20">
                            Marzo 10, 2023
                        </span>
                    </div>
                </a>
                <a href="/post" class="shadow-amplia bg-white rounded-xl">
                    <div style="background-image: url({{ asset('/img/post-02.png')}})" class="rounded-top-xl group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                        <span class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <span class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base">
                            Leer nota
                        </span>
                    </div>
                    <div class="bg-white py-6 px-5 xl:py-8 rounded-xl">
                        <span class="block font-body text-lg font-semibold text-color-cucchiara">
                            Telecom Argentina S.A.
                        </span>
                        <span class="block pt-2 font-body text-grey-20">
                            Marzo 10, 2023
                        </span>
                    </div>
                </a>
                <a href="/post" class="shadow-amplia bg-white rounded-xl">
                    <div style="background-image: url({{ asset('/img/post-03.png')}})" class="rounded-top-xl group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                        <span class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <span class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base">
                            Leer nota
                        </span>
                    </div>
                    <div class="bg-white py-6 px-5 xl:py-8 rounded-xl">
                        <span class="block font-body text-lg font-semibold text-color-cucchiara">
                            La macroeconomía Argentina para 2023
                        </span>
                        <span class="block pt-2 font-body text-grey-20">
                            Marzo 10, 2023
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- newsletter --}}
    <div class="bg-quarter" id="clients">
        <div class="container py-8 md:py-20 grid grid-cols-2 gap-2">
            <div class="mx-auto w-full sm:w-3/4 lg:w-full">
                <h2 class="text-white text-left font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-4xl">
                    Recibí nuestro
                </h2>
                <h2 class="text-white text-left font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-4xl">
                    Newsletter semanal
                </h2>
            </div>
            <div class="mx-auto w-full sm:w-3/4 lg:w-full">
                <form class="mt-6 flex flex-col justify-center sm:flex-row">
                    <input class="w-full rounded px-4 py-2 font-body text-black sm:w-2/5 sm:py-4 lg:w-1/2" type="text" id="email" placeholder="Coloca tu correo electronico"/>
                    <button class="text-color-cucchiara mt-2 rounded bg-cyan-20 px-8 py-2 font-body text-base font-bold uppercase text-primary transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring focus:ring-yellow sm:ml-2 sm:mt-0 sm:py-4 md:text-lg">
                        Suscribite
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="h-section-42"></div>  
    {{-- end newsletter --}}
@endsection