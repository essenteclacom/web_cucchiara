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
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet"/>
        <link crossorigin="anonymous" href="{{ asset('/css/custom.css') }}" media="screen" rel="stylesheet"/>
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body :class="{ 'overflow-hidden max-h-screen': mobileMenu }" class="relative" x-data="{ mobileMenu: false }">
        <div id="main" class="relative">
            <div x-data="{triggerNavItem(id) {$scroll(id)}, triggerMobileNavItem(id) {mobileMenu = false; this.triggerNavItem(id)}}">
                <div class="w-full z-50 top-0 py-3 sm:py-5 absolute bg-white">
                    <div class="container flex items-center justify-between">
                        <div>
                            <a href="/">
                                <img src="{{ asset('/img/logocucchiara.png') }}" class="w-24 lg:w-48" alt="logo image"/>
                            </a>
                        </div>
                        <div class="hidden lg:block">
                            <ul class="flex items-center">
                                <li class="group pl-6"></li>
                                <li class="group pl-6"></li>
                                <li class="group pl-6"></li>
                                <li class="group pl-6"></li>
                                <li class="group pl-6"></li>
                                <li class="group pl-6"></li>
                                <li class="group pl-6">
                                    <button class="mt-6 flex items-center justify-center rounded bg-white button-border-color px-8 py-2 text-lg font-bold text-primary hover:bg-cyan-20">
                                        Abrir cuenta
                                    </button>
                                </li>
                                <li class="group pl-6">
                                    <button class="mt-6 flex items-center justify-center rounded bg-white button-border-color px-8 py-2 text-lg font-bold text-primary hover:bg-cyan-20">
                                        Ingresar
                                    </button>
                                </li>
                                <li class="group pl-6">
                                    <button class="mt-6 flex items-center justify-center rounded bg-white px-8 py-2 text-lg font-bold uppercase text-primary hover:bg-cyan-20">
                                        ESP
                                        <i class="bx bx-chevron-down relative -right-2 text-3xl"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="block lg:hidden">
                            <button @click="mobileMenu = true">
                                <i class="bx bx-menu text-4xl text-white"></i>
                            </button>
                        </div>
                    </div>
                    <div class="container flex items-center justify-between border-menu-line-top mt-6">
                        <div>
                        
                        </div>
                        <div class="hidden lg:block">
                            <ul class="flex items-center pt-5">
                                <li class="group pl-6">
                                    <a href="/about">
                                        <span class="cursor-pointer pt-0.5 pr-6-menus font-header font-bold text-primary text-color-cucchiara">Nosotros</span>
                                        <span class="block h-0.5 w-full bg-transparent group-hover:bg-blue"></span>
                                    </a>
                                </li>
                                <li class="group pl-6">
                                    <span @click="triggerNavItem('#services')" class="cursor-pointer pt-0.5 pr-6-menus font-header font-bold text-primary text-color-cucchiara">Servicios</span>
                                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-blue"></span>
                                </li>
                                <li class="group pl-6">
                                    <span @click="triggerNavItem('#portfolio')" class="cursor-pointer pt-0.5 pr-6-menus font-header font-bold text-primary text-color-cucchiara">Fondos</span>
                                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-blue"></span>
                                </li>
                                <li class="group pl-6">
                                    <span @click="triggerNavItem('#clients')" class="cursor-pointer pt-0.5 pr-6-menus font-header font-bold text-primary text-color-cucchiara">Research</span>
                                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-blue"></span>
                                </li>
                                <li class="group pl-6">
                                    <span @click="triggerNavItem('#work')" class="cursor-pointer pt-0.5 font-header font-bold text-primary text-color-cucchiara">Opere online</span>
                                    <span class="block h-0.5 w-full bg-transparent group-hover:bg-blue"></span>
                                </li>
                            </ul>
                        </div>
                        <div class="block lg:hidden">
                            <button @click="mobileMenu = true">
                                <i class="bx bx-menu text-4xl text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden" :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
                    <div class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3">
                        <button class="absolute top-0 right-0 mt-4 mr-4" @click="mobileMenu = false">
                            <img src="{{ asset('/img/icon-close.svg') }}"class="h-10 w-auto" alt="" />
                        </button>
                        <ul class="mt-8 flex flex-col">
                            <li class="py-2">
                                <span @click="triggerMobileNavItem('#about')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">About</span>
                            </li>
                            <li class="py-2">
                                <span @click="triggerMobileNavItem('#services')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Services</span>
                            </li>
                            <li class="py-2">
                                <span @click="triggerMobileNavItem('#portfolio')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Portfolio</span>
                            </li>
                            <li class="py-2">
                                <span @click="triggerMobileNavItem('#clients')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Clients</span>
                            </li>
                            <li class="py-2">
                                <span @click="triggerMobileNavItem('#work')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Work</span>
                            </li>
                            <li class="py-2">
                                <span @click="triggerMobileNavItem('#statistics')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Statistics</span>
                            </li>
                            <li class="py-2">
                                <span @click="triggerMobileNavItem('#blog')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Blog</span>
                            </li>
                            <li class="py-2">
                                <span @click="triggerMobileNavItem('#contact')" class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white">Contact</span>
                            </li>
                        </ul>
                    </div>
                </div>

                @yield('content')
                {{-- contact --}}
                <div class="container py-16 md:py-20" id="contact">
                    <h2 class="text-color-cucchiara text-left font-header text-4xl font-bold text-primary sm:text-5xl lg:text-6xl">
                        Contacto
                    </h2>
                    <form class="mx-auto w-full pt-10 sm:w-3/4">
                        <div class="flex flex-col md:flex-col">
                            <input class="mr-3 w-full rounded border-grey-50 py-3 font-body text-black md:w-1/2 lg:mr-5" placeholder="Nombre y Apellido*" type="text" id="name"/>
                            <input class="mt-6 w-full rounded border-grey-50 py-3 font-body text-black md:mt-0 md:w-1/2" placeholder="Email*" type="text" id="email"/>
                            <input class="mt-6 w-full rounded border-grey-50 py-3 font-body text-black md:mt-0 md:w-1/2" placeholder="Teléfono*" type="text" id="phone"/>
                        </div>
                        <textarea class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8" placeholder="Mensaje" id="message" cols="30" rows="10"></textarea>
                        <button class="mt-6 flex items-center justify-center rounded bg-third px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20">
                            Send
                            <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
                        </button>
                    </form>
                    <div class="flex flex-col pt-16 lg:flex-row">
                        <div class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3">
                            <div class="flex items-center">
                                <i class="bx bx-phone text-2xl text-grey-40"></i>
                                <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                                    My Phone
                                </p>
                            </div>
                            <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                                (+881) 111 222 333
                            </p>
                        </div>
                        <div class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2">
                            <div class="flex items-center">
                                <i class="bx bx-envelope text-2xl text-grey-40"></i>
                                <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                                    My Email
                                </p>
                            </div>
                            <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                                name@mydomain.com
                            </p>
                        </div>
                        <div class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2">
                            <div class="flex items-center">
                                <i class="bx bx-map text-2xl text-grey-40"></i>
                                <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
                                    My Address
                                </p>
                            </div>
                            <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
                                123 New York D Block 1100, 2011 USA
                            </p>
                        </div>
                    </div>
                </div>
                {{-- end contact --}}
                {{-- map --}}
                <div class="h-72 bg-cover bg-center bg-no-repeat sm:h-64 md:h-72 lg:h-96" style="background-image: url({{ asset('/img/map.png')}})"></div>
                {{-- end map --}}
                {{-- footer --}}
                <div class="bg-footer">
                    <div class="container py-6">
                        <div class="flex justify-between py-6">
                            <div class="pt-1"><img src="{{ asset('/img/logocucchiara.png') }}" class="w-24 lg:w-48" alt="logo image"/></div>
                            <div class="pt-1 font-bold border-t-2 border-primary">Normativas<br/>Aranceles y comisiones</div>
                            <div class="pt-1 border-t-2 border-primary">info@cucchiara.com.ar<br/>Sarmiento 470, CABA<br/>Tel: +54 11 4394 9330</div>
                            <div class="pt-1 border-t-2 border-primary">
                                <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
                                <i class="bx bxl-twitter text-2xl text-white hover:text-yellow"></i>
                            </div>
                            <div><img src="{{ asset('/img/footer_data_fiscal.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_data_fiscal"/></div>
                        </div>
                        <div class="flex justify-between py-6">
                            <div><img src="{{ asset('/img/footer_01.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_01"/></div>
                            <div><img src="{{ asset('/img/footer_02.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_02"/></div>
                            <div><img src="{{ asset('/img/footer_03.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_03"/></div>
                            <div><img src="{{ asset('/img/footer_04.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_04"/></div>
                            <div><img src="{{ asset('/img/footer_05.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_05"/></div>
                            <div><img src="{{ asset('/img/footer_06.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_06"/></div>
                            <div><img src="{{ asset('/img/footer_07.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_07"/></div>
                            <div><img src="{{ asset('/img/footer_08.png') }}" class="w-2\/3 lg:w-2\/3" alt="footer_08"/></div>
                        </div>
                        <div class="text-center py-6">
                            <div>Miembro de BYMA Nº 18 | Miembro de ROFEX Nº 472 | ALyC Integral registro Nro. 265 CNV | Miembro de MAE Nº 672</div>
                            <div>© 2023 Cuchiarra Todos los derechos reservados. Diseño y desarollo porFolklore</div>
                        </div>
                    </div>
                </div>
                {{-- end footer --}}
            </div>
        </div>
        <script src="{{ asset('/js/main.js')}}"></script>
    </body>
</html>