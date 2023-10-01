@extends('layouts.main')

@section('title', 'Home')

@section('content')
    {{-- slide --}}
    <div>
        <div class="relative bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('/img/background_home.png')}}')">
            <div class="container relative z-30 pb-hero-16 sm:pb-hero-48 lg:pb-hero-48">
                <div class="flex flex-col items-center justify-center lg:flex-row">
                    <div>
                        <h1 class="text-center font-body font-bold text-4xl text-white xs:pt-7 sm:text-left sm:text-5xl md:text-6xl lg:pl-8 sm:pt-16">
                            Soluciones Financieras Integrales
                        </h1>
                        <div class="flex flex-col xs:pt-2 lg:pt-3 sm:flex-row sm:pt-5">
                            <div class="flex items-center pl-0 md:pl-1">
                                <p class="font-body text-lg text-white xs:text-center lg:text-left lg:pl-8 sm:pb-64">
                                    Te acompañamos a tomar las mejores decisiones de inversión, ofreciéndote una amplia gama de instrumentos financieros según tu objetivo, plazo y perfil de riesgo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <img src="img/Cucchiara_Animacion_01.gif" class="img-responsive absolute xs:ml-2 xs:pt-20 lg:ml-196 lg:ml-30 lg:mt-20 z--1 sm:pt-24">
                    <div class="xs:h-56 lg:h-[38rem] lg:w-[60rem] sm:h-120 xs:w-[35rem] xs:h-56"></div>
                </div>
                <div class="xs:pt-0 sm:pt-10 lg:pl-8 lg:pt-0 xs:text-center">
                    <span class="text-3xl text-white font-body font-bold xs:text-center">
                        Nosotros
                    </span>
                    <p class="font-body text-lg text-white xs:text-center xs:pt-1"> 
                        Cucchiara y Cía. S. A. es un Agente de Negociación, Liquidación y Compensación que ofrece servicios integrales de gestión de carteras de inversión fomentando relaciones directas con sus clientes, individuales o corporativos, proporcionando soluciones financieras guiadas por la prudencia, transparencia, y responsabilidad.
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    {{-- cards --}}
    <div class="container pt-0 pb-28 absolute inset-x-0 top-card-2 fieldset z-30 lg:pl-12 xs:text-center xs:mt-1 lg:mt-20" id="services">
        <span class="text-white lg:text-left font-body font-bold xs:text-3xl lg:text-3xl lg:ml-24 sm:text-3xl">
            Lo que hacemos
        </span>    
        <div class="grid grid-cols-1 gap-y-10 gap-x-14 pt-10 sm:grid-cols-2 md:pt-12 lg:grid-cols-2 lg:mr-40 lg:ml-24 xs:mr-6 sm:ml-6 xs:pl-20">
            <div class="group rounded-lg px-12 py-14 shadow-amplia bg-white flex flex-row justify-between">
                <div class="text-left flex items-center">
                    <h3 class="text-color-cucchiara text-lg font-body font-bold text-primary lg:text-xl">
                        Administración<br/>de cartera
                    </h3>
                </div>
                <div class="lg:h-24 lg:w-24 xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/card_01.png') }}" alt="development icon" class="sm:max-w-4rem sm:pt-4"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/card_01.png') }}" alt="development icon" class="sm:max-w-4rem sm:pt-4"/>
                    </div>
                </div>
            </div>
            <div class="group rounded-lg px-12 py-14 shadow-amplia bg-white flex flex-row justify-between">
                <div class="text-left flex items-center">
                    <h3 class="text-color-cucchiara text-lg font-bold lg:text-xl">
                        Research
                    </h3>
                </div>
                <div class="h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/card_02.png') }}"alt="content marketing icon" class="sm:max-w-4rem sm:pt-4"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/card_02.png') }}"alt="content marketing icon" class="sm:max-w-4rem sm:pt-4"/>
                    </div>
                </div>
            </div>
            <div class="group rounded-lg px-12 py-14 shadow-amplia bg-white flex flex-row justify-between">
                <div class="text-left flex items-center">
                    <h3 class="text-color-cucchiara text-lg font-bold lg:text-xl">
                        Operaciones<br/>financieras
                    </h3>
                </div>
                <div class="h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/card_03.png') }}"alt="Mobile Application icon" class="sm:max-w-4rem sm:pt-4"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/card_03.png') }}"alt="Mobile Application icon" class="sm:max-w-4rem sm:pt-4"/>
                    </div>
                </div>
            </div>
            <div class="group rounded-lg px-12 py-14 shadow-amplia bg-white flex flex-row justify-between">
                <div class="text-left flex items-center">
                    <h3 class="text-color-cucchiara text-lg font-bold lg:text-xl">
                        Fondos comunes<br/>de inversión
                    </h3>
                </div>
                <div class="h-24 w-24 text-center xl:h-28 xl:w-28">
                    <div class="hidden group-hover:block">
                        <img src="{{ asset('/img/card_04.png') }}"alt="Email Marketing icon" class="sm:max-w-4rem sm:pt-4"/>
                    </div>
                    <div class="block group-hover:hidden">
                        <img src="{{ asset('/img/card_04.png') }}"alt="Email Marketing icon" class="sm:max-w-4rem sm:pt-4"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end cards --}}
    <div class="xs:h-58 sm:h-section-43 md:h-section-43 lg:h-section-43 xl:h-section-43"></div>
    {{-- open account --}}
    <div class="container text-center" id="services">
        <span class="text-center font-body lg:text-4xl xs:text-3xl font-bold text-color-cucchiara">
            Abrí tu cuenta hoy
        </span>
        <div class="mx-auto lg:w-5/6 bg-white lg:py-20 xs:pt-1 xs:pb-2 md:w-11/12 2xl:w-full sm:pb-16">
            <div class="grid grid-cols-4 gap-5 md:gap-8 xl:grid-cols-4 xl:gap-5">
                <div class="flex flex-col items-center justify-center text-center md:flex-col md:text-center">
                    <div>
                        <img src="{{ asset('/img/open_account_01.png') }}" class="mx-auto w-auto xs:h-4 lg:h-24" alt="icon project"/>
                    </div>
                    <div class="pt-5">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xs:text-base lg:text-xl">
                            Abrí tu<br>cuenta
                        </h4>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center text-center md:flex-col md:text-center">
                    <div>
                        <img src="{{ asset('/img/open_account_02.png') }}" class="mx-auto w-auto xs:h-3-5 lg:h-24" alt="icon award"/>
                    </div>
                    <div class="pt-5 md:pl-5 md:pt-5">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xs:text-base lg:text-xl pb-8">
                            Asesorate
                        </h4>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/open_account_03.png') }}"class="mx-auto w-auto xs:h-4-2 lg:h-24" alt="icon happy clients"/>
                    </div>
                    <div class="pt-5 md:pl-5 md:pt-5">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xs:text-base lg:text-xl">
                            Definí tu cartera<br/>de inversión
                        </h4>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center text-center md:mt-10 md:flex-col md:text-center lg:mt-0">
                    <div>
                        <img src="{{ asset('/img/open_account_04.png') }}"class="mx-auto w-auto xs:h-4-2 lg:h-24" alt="icon puzzle"/>
                    </div>
                    <div class="pt-5 md:pl-5 md:pt-5">
                        <h4 class="text-color-cucchiara font-body font-bold text-center xs:text-base lg:text-xl">
                            Monitoreá<br/>tus inversiones
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end open account --}}
    {{-- need --}}
    <div class="bg-quarter" id="about">
        <div class="flex flex-row items-center justify-between py-16 lg:mx-16 md:py-20 lg:flex-row">
            <div>
                <h2 class="font-body xs:text-base sm:text-2xl md:text-4xl lg:text-5xl font-bold text-white xs:pl-3 lg:pl-16 sm:pl-8">
                    ¿Qué necesitas<br>para abrir tu<br>cuenta?                  
                </h2>
            </div>
            <div class="flex gap-4 xs:pr-2">
                <div class="wrapper-card">
                    <div class="single-card">
                        <div class="front-card">
                            <div class="gradient-cucciara rounded-1 shadow xs:h-10 xs:w-12 sm:h-48 sm:mr-8 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="relative flex justify-center top-minus-10 xs:h-3 lg:h-20">
                                    <img src="{{ asset('/img/persona.png') }}" alt="development icon"/>
                                </div>
                                <div class="text-center">
                                    <h3 class="font-body font-semibold text-white xs:text-base lg:text-3xl sm:text-xl">
                                        Personas<br/>Físicas
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="back-card">
                            <div class="gradient-cucciara rounded-1 shadow xs:h-10 xs:w-12 sm:h-48 sm:mr-8 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="text-left text-white xs:pt-1-5 xs:px-5 sm:px-5 sm:pt-1-5 md:px-5 md:pt-1-5 lg:px-9 lg:pt-10">
                                    <p class="font-body xs:text-xxs sm:text-xxs lg:text-xs">
                                        · Documento de Identidad.<br/>
                                        · Verificación de domicilio.<br/>
                                        · Justificación de ingresos y patrimonio.<br/>
                                        · En caso de contar con apoderado, documento de identidad de éste, así como copia del poder otorgado ante Escribano Público.
                                    </p>
                                </div>
                                <div class="text-right xs:pt-0-5 lg:pt-8 px-9 pb-4 underline underline-offset-8">
                                    <a href="" class="font-body font-bold text-a-color sm:text-xxs">Abrir cuenta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-card">
                    <div class="single-card">
                        <div class="front-card">
                            <div class="gradient-cucciara rounded-1 shadow xs:h-10 xs:w-12 sm:h-48 sm:mr-8 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="relative flex justify-center top-minus-10 xs:h-3 lg:h-20">
                                    <img src="{{ asset('/img/contrato.png') }}" alt="development icon"/>
                                </div>
                                <div class="text-center">
                                    <h3 class="font-body font-semibold text-white xs:text-base lg:text-3xl sm:text-xl">
                                        Personas<br/>Jurídicas
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="back-card">
                            <div class="gradient-cucciara rounded-1 shadow xs:h-10 xs:w-12 sm:h-48 sm:mr-8 sm:w-48 md:mr-8 md:w-48 lg:h-64 lg:w-72">
                                <div class="text-left text-white xs:pt-1-5 xs:px-5 sm:px-5 sm:pt-1-5 md:px-5 md:pt-1-5 lg:px-9 lg:pt-10">
                                    <p class="font-body xs:text-xxs sm:text-xxs lg:text-xs">
                                        · Actas de Directorio / Asamblea con designación de cargos.<br/>
                                        · Estatuto de la Sociedad.<br/>
                                        · Registro de accionistas actualizado.<br/>
                                        · Estados contables.<br/>
                                        · Verificación de domicilio de la sociedad.<br/>
                                        · De los representantes de la sociedad y beneficiarios finales. 
                                    </p>
                                    <p class="font-body xs:text-xxs pl-4 sm:text-xxs">
                                        · Documento de identidad<br/>
                                        · Verificación de domicilio
                                    </p>
                                </div>
                                <div class="text-right xs:pt-0 lg:pt-2 px-9 pb-4 underline underline-offset-8">
                                    <a href="" class="font-body font-bold text-a-color sm:text-xxs">Abrir cuenta</a>
                                </div>
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
            <div class="mx-auto grid w-full grid-cols-1 gap-6 pt-4 sm:w-3/4 lg:w-full lg:grid-cols-3 xl:gap-10">
                <a href="/post" class="shadow-amplia bg-white rounded-xl">
                    <div style="background-image: url({{ asset('/img/post-01.png')}})" class="rounded-top-xl group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                        <span class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                    </div>
                    <div class="bg-white py-6 px-5 xl:py-8 rounded-xl">
                        <span class="block font-body text-lg font-semibold text-color-cucchiara">
                            Compañia general de combustible
                        </span>
                        <span class="block pt-2 font-body text-color-cucchiara">
                            Marzo 10, 2023
                        </span>
                    </div>
                </a>
                <a href="/post" class="shadow-amplia bg-white rounded-xl">
                    <div style="background-image: url({{ asset('/img/post-02.png')}})" class="rounded-top-xl group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                        <span class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                    </div>
                    <div class="bg-white py-6 px-5 xl:py-8 rounded-xl">
                        <span class="block font-body text-lg font-semibold text-color-cucchiara">
                            Telecom Argentina S.A.
                        </span>
                        <span class="block pt-2 font-body text-color-cucchiara">
                            Marzo 10, 2023
                        </span>
                    </div>
                </a>
                <a href="/post" class="shadow-amplia bg-white rounded-xl">
                    <div style="background-image: url({{ asset('/img/post-03.png')}})" class="rounded-top-xl group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                        <span class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <!--<span class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base">
                            Leer nota
                        </span>-->
                    </div>
                    <div class="bg-white py-6 px-5 xl:py-8 rounded-xl">
                        <span class="block font-body text-lg font-semibold text-color-cucchiara">
                            La macroeconomía Argentina para 2023
                        </span>
                        <span class="block pt-2 font-body text-color-cucchiara">
                            Marzo 10, 2023
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- newsletter --}}
    <div class="bg-quarter" id="clients">
        <div class="container flex justify-between py-12 grid grid-cols-2 gap-2 flex items-center">
            <div>
                <h2 class="text-white font-header xs:text-3xl lg:text-5xl font-bold">
                    Recibí nuestros<br/>informes
                </h2>
            </div>
            <div class="text-right">
                <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-color-cucchiara rounded bg-button text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring px-12 py-2 text-center">
                    Suscribite
                </button>
            </div>
        </div>
    </div>
    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="px-6 py-20 bg-quarter flex flex-col items-center rounded">
                  <h3 class="mb-4 text-2xl font-bold text-white">Recibí nuestro Newsletter semanal</h3>
                  <form class="space-y-6" action="/home">
                      <div class="flex flex-row justify-between gap-3">
                          <div class="">
                              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 text-white"></label>
                              <input type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Nombres *" required>
                          </div>
                          <div class="">
                              <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 text-white"></label>
                              <input type="lastname" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Apellidos *" required>
                          </div>
                      </div>
                      <div class="w-full">
                          <input type="email" name="email" id="email" class="w-full bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email*" required>
                      </div>
                      <div class="flex justify-between">
                          <div class="flex flex-col">
                              <div class="flex flex-row">
                                  <div class="flex items-center h-5">
                                      <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                  </div>
                                  <label for="remember" class="ml-2 text-sm font-medium text-white">Resumen Estadistico</label><br>
                              </div>
                              <div class="flex flex-row">
                                  <div class="flex items-center h-5">
                                      <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                                  </div>
                                  <label for="remember" class="ml-2 text-sm font-medium text-white">Resumen Economico</label>
                              </div>
                          </div>
                          <!--<a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>-->
                      </div>
                      <div class="flex justify-end">
                          <button class="text-color-cucchiara rounded bg-cyan-20 px-12 py-2 font-body text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring">
                              Enviar
                          </button>
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
    {{-- end newsletter --}}
    <div class="h-section-42"></div>
@endsection