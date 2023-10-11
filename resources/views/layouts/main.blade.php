<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <title>CUCCHIARA - @yield('title')</title>
        <meta property="og:title" content="Homepage | Atom Template"/>
        <meta property="og:locale" content="en_US"/>
        <link rel="canonical" href="//"/>
        <meta property="og:url" content="//"/>
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."/>
        <link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}"/>
        <meta name="theme-color" content="#5540af"/>
        <meta property="og:site_name" content="Atom Template"/>
        <meta property="og:image" content="{{ asset('/img/social.jpg') }}"/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@tailwindmade"/>
        <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect"/>
        <!-- <link as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="preload"/>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet"/> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Noto+Sans:ital,wght@0,100,600;0,700;0,800;0,900;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
        <link crossorigin="anonymous" href="{{ asset('/css/custom.css') }}" media="screen" rel="stylesheet"/>
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://kit.fontawesome.com/68e2eb1b2d.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    </head>
    <body :class="{ 'overflow-hidden max-h-screen': mobileMenu }" class="relative" x-data="{ mobileMenu: false }">
        <div id="main" class="relative">
            <div x-data="{triggerNavItem(id) {$scroll(id)}, triggerMobileNavItem(id) {mobileMenu = false; this.triggerNavItem(id)}}">
                <div class="w-full z-50 top-0 py-3 sm:py-5 relative bg-white">
                    <div class="container flex items-center justify-between">
                        <div>
                            <a href="/">
                                <img src="{{ asset('/img/Logo_Color-01.png') }}" class=" xxs:w-custom-logo xs:w-custom-logo sm:w-custom-logo md:w-custom-logo lg:w-custom-logo xl:w-custom-logo xs:w-2/5 " alt="logo image"/>
                            </a>
                        </div>
                        <div class="flex justify-right flex-end flex-row items-center">
                            <a href="/openaccount" class="font-body text-color-cucchiara flex items-center justify-center rounded bg-white button-border-color xxs:text-xs xs:px-5 lg:px-8 xs:py-0 lg:py-2 xs:text-base lg:text-lg font-bold hover:bg-cyan-20">
                                Abrir cuenta
                            </a>
                            <a class="font-body ml-3 text-color-cucchiara flex items-center justify-center rounded bg-cyan-20 button-border-color xxs:text-xs xs:px-5 lg:px-8 xs:py-0 lg:py-2 xs:text-base lg:text-lg font-bold hover:bg-white">
                                Ingresar
                            </a>
                            <div class="hidden lg:block">
                                <ul class="nav-lang flex items-center">
                                    <li class="text-color-cucchiara group pl-6">
                                        <a class="flex items-center justify-center rounded bg-white p-custom-esp-buttom text-lg font-bold uppercase hover:bg-cyan-20">
                                            ESP
                                            <i class="bx bx-chevron-down relative -right-2 text-3xl"></i>
                                        </a>
                                        <ul>
                                            <li class="text-color-cucchiara text-lg font-bold uppercase"><button class="hover:bg-cyan-20 flex items-center justify-center rounded pr-41-custom" href="">ENG</button></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="ml-2 block lg:hidden">
                                <button @click="mobileMenu = true">
                                    <i class="bx bx-menu text-4xl text-color-cucchiara"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="container flex items-center justify-between border-menu-line-top mt-6 hidden lg:flex">
                        <div>
                        </div>
                        <div class="hidden lg:block">
                            <ul class="flex items-center pt-5">
                                <li class="group pl-6">
                                    <a href="/about">
                                        <span class="hover-underline-animation cursor-pointer pt-0.5 mr-6-menus font-body font-bold text-primary text-color-cucchiara">Nosotros</span>
                                    </a>
                                </li>
                                <li class="group pl-6">
                                    <a href="/services">
                                        <span class="hover-underline-animation cursor-pointer pt-0.5 mr-6-menus font-body font-bold text-primary text-color-cucchiara">Servicios</span>
                                    </a>
                                </li>
                                <li class="group pl-6">
                                    <a href="/founds">
                                        <span class="hover-underline-animation cursor-pointer pt-0.5 mr-6-menus font-body font-bold text-primary text-color-cucchiara">Fondos</span>
                                    </a>
                                </li>
                                <li class="group pl-6">
                                    <a href="/research">
                                        <span class="hover-underline-animation cursor-pointer pt-0.5 mr-6-menus font-body font-bold text-primary text-color-cucchiara">Research</span>
                                    </a>
                                </li>
                                <li class="group pl-6">
                                    <a href="/onlineoperation">
                                        <span class="hover-underline-animation cursor-pointer pt-0.5 font-body font-bold text-primary text-color-cucchiara">Opere online</span>
                                        <!--<span class="block h-0.5 w-full bg-transparent group-hover:bg-blue"></span>-->
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="hidden">
                            <button @click="mobileMenu = true">
                                <i class="bx bx-menu text-4xl text-black"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden" :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
                    <div class="absolute right-0 min-h-screen w-1/2 bg-quarter py-4 px-8 shadow md:w-1/2">
                        <button class="absolute top-0 right-0 mt-4 mr-4" @click="mobileMenu = false">
                            <img src="{{ asset('/img/icon-close.svg') }}"class="h-10 w-auto" alt="" />
                        </button>
                        <ul class="mt-8 flex flex-col">
                            <li class="py-4">
                                <a href="/about"><span class="cursor-pointer font-body font-semibold text-white">Nosotros</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/services"><span class="cursor-pointer font-body font-semibold text-white">Servicios</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/founds"><span class="cursor-pointer font-body font-semibold text-white">Fondos</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/research"><span class="cursor-pointer font-body font-semibold text-white">Research</span></a>
                            </li>
                            <li class="py-4">
                                <a href="/onlineoperation"><span class="cursor-pointer font-body font-semibold text-white">Opere online</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                @yield('content')
                {{-- contact --}}  
                <div class="bg-contact">
                    <div class="container bg-contact" id="contact">
                        <div class="relative xs:top-minus-1-2 top-minus-11">
                            <h2 class="text-color-cucchiara text-left font-header xs:text-3xl lg:text-5xl font-bolder text-primary xs:ml-4 lg:ml-32">
                                Contacto
                            </h2>
                        </div>
                        <form class="mx-auto w-full pt-10">
                            <div class="flex flex-row items-center justify-center">
                                <div class="flex flex-col md:flex-col mr-14">
                                    <input class="xs:w-contact-input w-contact-input rounded border-white py-3 font-body text-grey-custom" placeholder="Nombre y Apellido*" type="text" id="name"/>
                                    <input class="xs:w-contact-input w-contact-input rounded border-white py-3 font-body text-grey-custom mt-6" placeholder="Email*" type="text" id="email"/>
                                    <input class="xs:w-contact-input w-contact-input rounded border-white py-3 font-body text-grey-custom mt-6" placeholder="Teléfono*" type="text" id="phone"/>
                                </div>
                                <div>
                                    <textarea class="w-full rounded border-white px-4 py-3 font-body text-grey-custom" placeholder="Mensaje" id="message" cols="50" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="flex items-end justify-end pb-20">
                                <button class="mt-6 flex items-center justify-center rounded px-8 py-3 font-header text-lg font-bold text-grey-custom hover:underline-offset-2 mr-24">
                                    Enviar
                                    <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- end contact --}}
                {{-- map --}}
                <a href="https://goo.gl/maps/aD9gLy3DTLgALnwt5" target="blank">
                <div class="h-72 bg-cover bg-center bg-no-repeat sm:h-64 md:h-72 lg:h-96" style="background-image: url({{ asset('/img/map.png')}})"></div>
                </a>
                {{-- end map --}}
                {{-- footer --}}
                <div class="bg-footer">
                    <div class="container py-6">
                        <div class="flex justify-center content-start py-6">
                            <div class="flex xxs:flex-col xs:flex-col sm:flex-col lg:flex-row xxs:mx-4 xs:mx-4 lg:mx-0">
                                <div class="pt-1 xxs:pb-8 xs:pb-8 xs:mx-4 sm:mx-4 md:mx-4 lg:mx-4 xl:mx-8">
                                    <img src="{{ asset('/img/Logo_Color-01.png') }}" class="w-48" alt="logo image"/>
                                </div>
                                <div class="mt-2 xxs:pb-8 xs:pb-8 border-t-footer xs:mx-4 sm:mx-4 md:mx-4 lg:mx-4 xl:mx-8">
                                    <a href="/regulations">
                                        <div class="pt-1 font-bold">Normativas<br/>Aranceles y comisiones<br/>Cuentas habilitadas</div>
                                    </a>
                                </div>
                                <div class="pt-1 mt-2 xxs:pb-8 xs:pb-8 border-t-footer xs:mx-4 sm:mx-4 md:mx-4 lg:mx-4 xl:mx-8">
                                    info@cucchiara.com.ar<br/>Sarmiento 470, C1041 CABA<br/>Tel: +54 11 4394 9330
                                </div>
                            </div>
                            <div class="flex xxs:flex-col-reverse justify-start-custom xs:flex-col-reverse xxs:mx-4 xs:mx-4 sm:mx-12 lg:mx-0 lg:flex-row">
                                <div class="flex flex-row pt-1 xxs:mt-10 xs:mt-10 sm:mt-10 lg:mt-2 xs:pb-8 border-t-footer xs:mb-16 xs:mx-2 sm:mx-2 md:mx-2 lg:mx-4 xl:mx-8">
                                    <i class="fa-brands fa-linkedin text-2xl text-color-cucchiara hover:text-white"></i>
                                    <i class="fa-brands fa-x-twitter text-2xl text-color-cucchiara hover:text-white"></i>
                                </div>
                                <div class="xs:pb-8 lg:mx-4 xl:mx-8">
                                    <img src="{{ asset('/img/footer_data_fiscal.png') }}" class="w-20" alt="footer_data_fiscal"/>
                                </div>
                            </div>
                        </div>
                        <div class="grid justify-items-center items-center gap-6 xxs:grid-cols-3 xs:grid-cols-3 sm:grid-cols-3 lg:grid-cols-9 py-6">
                            <div>
                                <a href="https://www.byma.com.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/Byma.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_01"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="https://cajadevalores.com.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/caja.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_02"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.matbarofex.com.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/Matba.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_03"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.mae.com.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/Mae.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_04"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.mav-sa.com.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/Mav.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_05"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.emta.org/markets/markets-a-g/argentina/" target="blank">
                                    <div><img src="{{ asset('/img/Emta.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_06"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="http://www.cadab.org.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/CAMARA.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_07"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="https://www.bcra.gob.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/Banco central.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_07"/></div>
                                </a>
                            </div>
                            <div>
                                <a href="http://www.cnv.gov.ar/" target="_blank">
                                    <div><img src="{{ asset('/img/CNV.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_08"/></div>
                                </a>
                            </div>
                        </div>
                        <div class="text-center py-6">
                            <div> ALyC Integral registro Nro. 265 CNV |Miembro de BYMA Nro. 18 | Miembro de ROFEX Nro. 472 | Miembro de MAE Nro. 672</div>
                            <div>© 2023 Cuchiarra Todos los derechos reservados. Diseño y desarollo porFolklore</div>
                        </div>
                    </div>
                </div>
                {{-- end footer --}}
            </div>
        </div>
        <script src="{{ asset('/js/main.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>