@extends('layouts.main')

@section('title', 'Research')

@section('content')
<div>
    <div>
        <img src="{{ asset('/img/services_01.png') }}" class="w-full h-full pt-36" alt="about image"/>
        <div class="absolute inset-x-0 top-96 mx-32">
            <p class="font-body text-3xl text-white text-center font-medium">
                Los fundamentos son un elemento clave en la toma de decisiones. Por ello, realizamos un continuo monitoreo de las principales variables del mercado y la coyuntura macroeconómica local e internacional para apoyar la toma de decisiones por parte de nuestros clientes.
            </p>
        </div>
    </div>
    <div class="bg-white" id="blog">
        <div class="container py-16 md:py-20">
            <h3 class="text-left font-header text-xl font-bold sm:text-xl lg:text-xl text-color-cucchiara">
                Últimos Informes de Research
            </h3>
            <div class="mx-auto grid w-full grid-cols-1 gap-6 pt-4 sm:w-3/4 lg:w-full lg:grid-cols-3 xl:gap-10">
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
    {{-- start search --}}
    <div class="h-section-42"></div>  
    <div class="bg-search">
        <div class="container">
            <div class="relative top-minus-10">
                <h2 class="text-color-cucchiara text-left font-header text-2xl font-bold text-primary sm:text-5xl lg:text-2xl">
                    Buscar Informes
                </h2>
            </div>
            <ul class="nav text-color-cucchiara">
				<li><a href="" class="rounded-md">Todos los reportes<i class="bx bx-chevron-down relative -right-2 text-3xl align-middle "></i></a>
					<ul>
						<li><a href="">Coyuntura Argentina</a></li>
						<li><a href="">Coyuntura Global</a></li>
						<li><a href="">Bonos corporativos</a>
                            <ul>
                                <li><a href="">Raghsa</a>
                                    <ul>
                                        <li><a href="">06.07.23 Provincia de Buenos Aires 20237</a></li>
                                        <li><a href="">17.03.23 Argentina Sovereign Bonds</a></li>
                                        <li><a href="">06.01.23 Coyuntura de la Deuda en Pesos</a></li>
                                        <li><a href="">05.12.22 Presentacion Fondo CyC Renta Mixta</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Genneia</a></li>
                                <li><a href="">Cappex S.A.</a></li>
                                <li><a href="">Submenu4</a></li>
                            </ul>
                        </li>
                        <li><a href="">Acciones</a></li>
                        <li><a href="">Fondos</a></li>
					</ul>
				</li>
			</ul>
            <div class="h-section-42"></div>
            </div>
        </div>
    </div>
    {{-- end search --}}
    {{-- newsletter --}}
    <div class="bg-quarter" id="clients">
        <div class="container py-8 md:py-20 grid grid-cols-2 gap-2 flex items-center">
            <div>
                <h2 class="text-white font-header text-4xl font-semibold sm:text-5xl lg:text-4xl">
                    Recibí nuestro<br/>Newsletter semanal
                </h2>
            </div>
            <div>
                <form class="flex flex-row items-center">
                    <input class="w-full rounded px-4 py-2 font-body text-black sm:py-4" type="text" id="email" placeholder="Coloca tu correo electronico"/>
                    <button class="text-color-cucchiara rounded bg-cyan-20 px-8 py-2 font-body text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring focus:ring-yellow sm:ml-2 sm:mt-0 sm:py-4 md:text-lg">
                        Suscribite
                    </button>
                </form>
            </div>
        </div>
    </div>
    {{-- end newsletter --}} 
</div>
@endsection