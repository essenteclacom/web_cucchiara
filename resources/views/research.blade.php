@extends('layouts.main')

@section('title', 'Research')

@section('content')
    {{-- slide --}}
    <div>
        <div>
            <img src="{{ asset('/img/pexels-vlada-karpovich-7433839 1.png') }}" class="w-full h-full" alt="about image"/>
            <div class="absolute inset-x-0 xs:top-8 lg:top-96 xs:mx-1 lg:mx-32">
                <p class="font-body xs:text-base lg:text-3xl text-white text-center">
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
        <div class="xs:h-4-2 lg:h-section-42"></div>  
        <div class="bg-search">
            <div class="container">
                <div class="relative top-minus-2">
                    <h2 class="text-color-cucchiara text-left font-header text-2xl font-800-bold">
                        Buscar Informes
                    </h2>
                </div>
                <div class="pt-16">
                    <a class="cursor-pointer rounded-md bg-white text-color-cucchiara text-xl p-4 xs:pl-1-5 lg:pl-14" id="all-informs">
                        Todos los reportes
                        <i class="bx bx-chevron-down relative -right-2 text-3xl align-middle xs:pl-3-7 lg:pl-7-5"></i>
                    </a>
                </div>
                <div class="h-section-42 block" id="space"></div>
                <div class="grid grid-cols-2 xs:gap-1 pb-20 pt-6 hidden" id="menu">
                    <div>
                        <nav class="menu xs:w-18 lg:w-96">
                            <ul class="text-color-cucchiara">
                                <li>
                                    <a class="submenu rounded-t-md cursor-pointer py-3.5 xs:pl-1-5 lg:pl-14 text-xl" id="01">Coyuntura Argentina</a>
                                    <ul class="ul-menu right-scroll hide-sub-menu text-center" id="sub-menu-01">
                                        <li class="finalmenu" id="001"><a class="py-3.5 cursor-pointer">Charlas y Presentaciones</a></li>
                                        <li class="finalmenu" id="002"><a class="py-3.5 cursor-pointer">Macro Local</a></li>
                                        <li class="finalmenu" id="003"><a class="py-3.5 cursor-pointer">Bonos Soberanos</a></li>
                                        <li class="finalmenu" id="004"><a class="py-3.5 cursor-pointer">Instrumentos en Pesos</a></li>
                                        <li class="finalmenu" id="005"><a class="py-3.5 cursor-pointer">Bonos Provinciales</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="submenu cursor-pointer py-3.5 xs:pl-1-5 lg:pl-14 text-xl" id="02">Coyuntura Global</a>
                                    <ul class="ul-menu right-scroll hide-sub-menu text-center" id="sub-menu-02">
                                        <li class="finalmenu" id="006"><a class="py-3.5 cursor-pointer">Charlas y Presentaciones</a></li>
                                        <li class="finalmenu" id="007"><a class="py-3.5 cursor-pointer">Macro Global</a></li>
                                        <li class="finalmenu" id="008"><a class="py-3.5 cursor-pointer">Renta Variable Global</a></li>
                                        <li class="finalmenu" id="009"><a class="py-3.5 cursor-pointer">Renta Fija Global</a></li>
                                        <li class="finalmenu" id="010"><a class="py-3.5 cursor-pointer">Commodities</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="submenu cursor-pointer py-3.5 xs:pl-1-5 lg:pl-14 text-xl" id="03">Bonos Corporativos</a>
                                    <ul class="ul-menu right-scroll hide-sub-menu text-center" id="sub-menu-03">
                                        <li class="finalmenu" id="011"><a class="py-3.5 cursor-pointer">Raghsa</a></li>
                                        <li class="finalmenu" id="012"><a class="py-3.5 cursor-pointer">Pampa Energía</a></li>
                                        <li class="finalmenu" id="013"><a class="py-3.5 cursor-pointer">Aeropuertos Argentina 2000</a></li>
                                        <li class="finalmenu" id="014"><a class="py-3.5 cursor-pointer">Capex</a></li>
                                        <li class="finalmenu" id="015"><a class="py-3.5 cursor-pointer">Transportadora de Gas del Sur</a></li>
                                        <li class="finalmenu" id="016"><a class="py-3.5 cursor-pointer">Arcor</a></li>
                                        <li class="finalmenu" id="017"><a class="py-3.5 cursor-pointer">Compañía General de Combustibles</a></li>
                                        <li class="finalmenu" id="018"><a class="py-3.5 cursor-pointer">Telecom Argentina</a></li>
                                        <li class="finalmenu" id="019"><a class="py-3.5 cursor-pointer">Genneia</a></li>
                                        <li class="finalmenu" id="020"><a class="py-3.5 cursor-pointer">Aluar</a></li>
                                        <li class="finalmenu" id="021"><a class="py-3.5 cursor-pointer">Pan American Energy</a></li>
                                        <li class="finalmenu" id="022"><a class="py-3.5 cursor-pointer">Tecpetrol</a></li>
                                        <li class="finalmenu" id="023"><a class="py-3.5 cursor-pointer">MSU Energy</a></li>
                                        <li class="finalmenu" id="024"><a class="py-3.5 cursor-pointer">YPF</a></li>
                                        <li class="finalmenu" id="025"><a class="py-3.5 cursor-pointer">Corporativos Argentinos</a></li>
                                        <li class="finalmenu" id="026"><a class="py-3.5 cursor-pointer">Corporativos Extranjeros</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="submenu cursor-pointer py-3.5 xs:pl-1-5 lg:pl-14 text-xl" id="04">Renta Variable</a>
                                    <ul class="ul-menu right-scroll hide-sub-menu text-center" id="sub-menu-04">
                                        <li class="finalmenu" id="027"><a class="py-3.5 cursor-pointer">Ternium Argentina</a></li>
                                        <li class="finalmenu" id="028"><a class="py-3.5 cursor-pointer">Tenaris</a></li>
                                        <li class="finalmenu" id="029"><a class="py-3.5 cursor-pointer">Pampa Energía</a></li>
                                        <li class="finalmenu" id="030"><a class="py-3.5 cursor-pointer">Loma Negra</a></li>
                                        <li class="finalmenu" id="031"><a class="py-3.5 cursor-pointer">Transportadora de Gas del Sur</a></li>
                                        <li class="finalmenu" id="032"><a class="py-3.5 cursor-pointer">Aluar</a></li>
                                        <li class="finalmenu" id="033"><a class="py-3.5 cursor-pointer">Bioceres</a></li>
                                        <li class="finalmenu" id="034"><a class="py-3.5 cursor-pointer">Richmond</a></li>
                                        <li class="finalmenu" id="035"><a class="py-3.5 cursor-pointer">YPF</a></li>
                                        <li class="finalmenu" id="036"><a class="py-3.5 cursor-pointer">Bancos Locales</a></li>
                                        <li class="finalmenu" id="037"><a class="py-3.5 cursor-pointer">Acciones Argentinas</a></li>
                                        <li class="finalmenu" id="038"><a class="py-3.5 cursor-pointer">Acciones Extranjeras</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="submenu rounded-b-md cursor-pointer py-3.5 xs:pl-1-5 lg:pl-14 text-xl" id="05">Fondos</a>
                                    <ul class="ul-menu right-scroll hide-sub-menu text-center rounded-b-md" id="sub-menu-05">
                                        <li class="finalmenu" id="039"><a class="py-3.5 cursor-pointer">Dolares Renta Fija</a></li>
                                        <li class="finalmenu" id="040"><a class="py-3.5 cursor-pointer">Pesos Renta Fija</a></li>
                                        <li class="finalmenu" id="041"><a class="py-3.5 cursor-pointer">Renta Mixta</a></li>
                                        <li class="finalmenu" id="042"><a class="py-3.5 cursor-pointer">Liquidez</a></li>
                                        <li class="finalmenu" id="043"><a class="py-3.5 cursor-pointer">Renta Fija USD</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                    <div class="flex text-color-cucchiara">
                        <!-- Coyuntura Argentina -->
                        <div class="flex flex-col hidden list" id="lista-001">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en charlas</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en charlas</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en charlas</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-002">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en macro</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en macro</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en macro</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-003">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en bonos</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en bonos</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en bonos</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-004">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en instrumentos</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en instrumentos</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en instrumentos</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-005">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en provinciales</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en provinciales</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en provinciales</a>
                        </div>
                        <!-- Coyuntura Global -->
                        <div class="flex flex-col hidden list" id="lista-006">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en presentaciones</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en presentaciones</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en presentaciones</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-007">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en global</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en global</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en global</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-008">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en variable</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en variable</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en variable</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-009">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en fija</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en fija</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en fija</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-010">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en commodities</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en commodities</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en commodities</a>
                        </div>
                        <!-- Bonos Corporativos -->
                        <div class="flex flex-col hidden list" id="lista-011">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Raghsa</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Raghsa</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Raghsa</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-012">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-013">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aeropuertos Argentina 2000</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aeropuertos Argentina 2000</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aeropuertos Argentina 2000</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-014">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Capex</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Capex</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Capex</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-015">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-016">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Arcor</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Arcor</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Arcor</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-017">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Compañía General de Combustibles</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Compañía General de Combustibles</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Compañía General de Combustibles</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-018">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Telecom Argentina</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Telecom Argentina</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Telecom Argentina</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-019">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Genneia</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Genneia</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Genneia</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-020">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-021">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pan American Energy</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pan American Energy</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pan American Energy</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-022">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tecpetrol</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tecpetrol</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tecpetrol</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-023">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en MSU Energy</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en MSU Energy</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en MSU Energy</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-024">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-025">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Argentinos</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Argentinos</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Argentinos</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-026">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Extranjeros</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Extranjeros</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Corporativos Extranjeros</a>
                        </div>
                        <!-- Renta Variable -->
                        <div class="flex flex-col hidden list" id="lista-027">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Ternium Argentina</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Ternium Argentina</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Ternium Argentina</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-028">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tenaris</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tenaris</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Tenaris</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-029">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pampa Energía</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-030">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Loma Negra</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Loma Negra</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Loma Negra</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-031">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Transportadora de Gas del Sur</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-032">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Aluar</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-033">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bioceres</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bioceres</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bioceres</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-034">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Richmond</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Richmond</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Richmond</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-035">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en YPF</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-036">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bancos Locales</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bancos Locales</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Bancos Locales</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-037">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Argentinas</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Argentinas</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Argentinas</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-038">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Extranjeras</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Extranjeras</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Acciones Extranjeras</a>
                        </div>
                        <!-- Fondos -->
                        <div class="flex flex-col hidden list" id="lista-039">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Dolares Renta Fija</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Dolares Renta Fija</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Dolares Renta Fija</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-040">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pesos Renta Fija</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pesos Renta Fija</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Pesos Renta Fija</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-041">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Mixta</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Mixta</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Mixta</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-042">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Liquidez</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Liquidez</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Liquidez</a>
                        </div>
                        <div class="flex flex-col hidden list" id="lista-043">
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Fija USD</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Fija USD</a>
                            <a href="" class="flex flex-row items-center"><span class="border-l-1 border-1 border-color-cucchiara h-8 absolute ml-[5px]"> </span><img src="{{ asset('/img/Ellipse.png')}}" class="w-auto h-3 pr-4">Clic en Renta Fija USD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- end search --}}
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
    </div>
<div class="h-section-42"></div>
@endsection