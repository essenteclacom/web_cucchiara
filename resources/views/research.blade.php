@extends('layouts.main')

@section('title', 'Research')

@section('content')
<div>
    <div>
        <img src="{{ asset('/img/pexels-vlada-karpovich-7433839 1.png') }}" class="w-full h-full" alt="about image"/>
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
            <div class="relative top-minus-2">
                <h2 class="text-color-cucchiara text-left font-header text-2xl font-bold text-primary sm:text-5xl lg:text-2xl">
                    Buscar Informes
                </h2>
            </div>
            {{-- <ul class="nav-search text-color-cucchiara">
				<li><a href="" class="rounded-md">Todos los reportes<i class="bx bx-chevron-down relative -right-2 text-3xl align-middle "></i></a>
					<ul>
						<li><a class="rounded-t-md" href="">Coyuntura Argentina</a></li>
						<li><a href="">Coyuntura Global</a></li>
						<li><a href="">Bonos corporativos</a>
                            <ul>
                                <li><a class="rounded-t-md" href="">Raghsa</a>
                                    <ul class="ul-ul">
                                        <li><a class="rounded-t-md" href="">06.07.23 Provincia de Buenos Aires 20237</a></li>
                                        <li><a href="">17.03.23 Argentina Sovereign Bonds</a></li>
                                        <li><a href="">06.01.23 Coyuntura de la Deuda en Pesos</a></li>
                                        <li><a class="rounded-b-md" href="">05.12.22 Presentacion Fondo CyC Renta Mixta</a></li>
                                    </ul>
                                </li>
                                <li><a href="">Genneia</a></li>
                                <li><a href="">Cappex S.A.</a></li>
                                <li><a class="rounded-b-md" href="">Submenu4</a></li>
                            </ul>
                        </li>
                        <li><a href="">Acciones</a></li>
                        <li><a class="rounded-b-md" href="">Fondos</a></li>
					</ul>
				</li>
			</ul> --}}
            <nav class="menu w-96">
                <ul class="text-color-cucchiara">
                    <li>
                        <a>Coyuntura Argentina</a>
                        <ul class="submenu">
                            <li class="finalmenu"><a>Charlas y Presentaciones</a></li>
                            <li><a href="#">Macro Local</a></li>
                            <li><a href="#">Bonos Soberanos</a></li>
                            <li><a href="#">Instrumentos en Pesos</a></li>
                            <li><a href="#">Bonos Provinciales</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Coyuntura Global</a>
                        <ul class="submenu">
                            <li><a href="#">Charlas y Presentaciones</a></li>
                            <li><a href="#">Macro Global</a></li>
                            <li><a href="#">Renta Variable Global</a></li>
                            <li><a href="#">Renta Fija Global</a></li>
                            <li><a href="#">Commodities</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Bonos Corporativos</a>
                        <ul class="submenu">
                            <li><a href="#">Raghsa</a>
                                {{-- <ul class="ul-ul">
                                    <li><a class="rounded-t-md" href="">06.07.23 Provincia de Buenos Aires 20237</a></li>
                                    <li><a href="">17.03.23 Argentina Sovereign Bonds</a></li>
                                    <li><a href="">06.01.23 Coyuntura de la Deuda en Pesos</a></li>
                                    <li><a class="rounded-b-md" href="">05.12.22 Presentacion Fondo CyC Renta Mixta</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="#">Pampa Energía</a></li>
                            <li><a href="#">Aeropuertos Argentina 2000</a></li>
                            <li><a href="#">Capex</a></li>
                            <li><a href="#">Transportadora de Gas del Sur</a></li>
                            <li><a href="#">Arcor</a></li>
                            <li><a href="#">Compañía General de Combustibles</a></li>
                            <li><a href="#">Telecom Argentina</a></li>
                            <li><a href="#">Genneia</a></li>
                            <li><a href="#">Aluar</a></li>
                            <li><a href="#">Pan American Energy</a></li>
                            <li><a href="#">Tecpetrol</a></li>
                            <li><a href="#">MSU Energy</a></li>
                            <li><a href="#">YPF</a></li>
                            <li><a href="#">Corporativos Argentinos</a></li>
                            <li><a href="#">Corporativos Extranjeros</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Renta Variable</a>
                        <ul class="submenu">
                            <li><a href="#">Ternium Argentina</a></li>
                            <li><a href="#">Tenaris</a></li>
                            <li><a href="#">Pampa Energía</a></li>
                            <li><a href="#">Loma Negra</a></li>
                            <li><a href="#">Transportadora de Gas del Sur</a></li>
                            <li><a href="#">Aluar</a></li>
                            <li><a href="#">Bioceres</a></li>
                            <li><a href="#">Richmond</a></li>
                            <li><a href="#">YPF</a></li>
                            <li><a href="#">Bancos Locales</a></li>
                            <li><a href="#">Acciones Argentinas</a></li>
                            <li><a href="#">Acciones Extranjeras</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Fondos</a>
                        <ul class="submenu">
                            <li><a href="#">Dolares Renta Fija</a></li>
                            <li><a href="#">Pesos Renta Fija</a></li>
                            <li><a href="#">Renta Mixta</a></li>
                            <li><a href="#">Liquidez</a></li>
                            <li><a href="#">Renta Fija USD</a></li>
                        </ul>
                    </li>
                    <!-- Agrega más elementos principales si es necesario -->
                </ul>
            </nav>
            <div class="h-section-42"></div>
        </div>
    </div>
    {{-- end search --}}
    {{-- newsletter --}}
    <div class="bg-quarter" id="clients">
        <div class="container flex justify-between py-12 grid grid-cols-2 gap-2 flex items-center">
            <div class="flex items-center justify-center">
                <h2 class="text-white font-header text-5xl font-bold">
                    Recibí nuestros<br/>informes
                </h2>
            </div>
            <div type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block flex items-center justify-center pl-32">
                <button class="text-color-cucchiara rounded bg-cyan-20 px-12 py-2 font-body text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring">
                    Suscribite
                </button>
                <!-- Main modal -->
                <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="rounded fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
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
            </div>
        </div>
    </div>
    {{-- end newsletter --}} 
</div>
<div class="h-section-42"></div>
@endsection