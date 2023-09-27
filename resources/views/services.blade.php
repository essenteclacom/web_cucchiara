@extends('layouts.main')

@section('title', 'Services')

@section('content')
    {{-- slide --}}
    <div>
        <div>
            <img src="{{ asset('/img/services_01.png') }}" class="w-full h-full" alt="about image"/>
            <div class="absolute inset-x-0 xs:top-8 lg:top-96 xs:mx-1 lg:mx-32">
                <p class="font-body xs:text-base lg:text-3xl text-white text-center">
                    Cucchiara forma parte de la comunidad inversora local como socio de la Cámara de Agentes de Bolsa y tiene presencia internacional como asociado del EMTA, comunidad internacional de inversión enfocada en el desarrollo de mercados emergentes.
                </p>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container">
                <div class="flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Administración<br>de carteras
                        </div>
                        <div class="text-base text-right max-w-3xl pt-5">
                            A través de profesionales idóneos te<br>brindamos soluciones de inversión a medida,<br>planteando estrategias que se alineen con tu<br>perfil de riesgo y tus objetivos.
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('/img/Group 1.png') }}" class="w-auto h-auto" alt="about image"/>
                    </div>
                </div>
                <div class="border"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/_219_Duty_Finance_Marketing_Money.png') }}" class="w-auto h-auto" alt="about image"/>
                    </div>
                    <div class="text-white xs:pl-3 lg:pl-20">
                        <div class="text-xl font-bold text-left max-w-3xl">
                            Research
                        </div>
                        <div class="text-base text-left max-w-3xl pt-5">
                            Publicamos regularmente informes económicos y<br>de investigación de mercado con información<br>valiosa para la toma de decisiones. Organizamos<br>charlas y seminarios web con el fin de promover el<br>intercambio de conocimiento y opinión entre<br>clientes y especialistas.
                        </div>
                    </div>
                    
                </div>
                <div class="border"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Operaciones financieras
                        </div>
                        <div class="text-base text-right max-w-3xl pt-5">
                            Te damos acceso a todos los mercados argentinos para<br>
                            operar los instrumentos de oferta pública autorizados<br>
                            por la CNV: Títulos públicos, obligaciones negociables,<br>
                            acciones, CEDEARs, fideicomisos financieros, cauciones<br>
                            bursátiles, opciones, futuros, pagarés bursátiles,<br>
                            cheques de pago diferidos, Fondos Comunes de<br>
                            Inversión, etc.
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('/img/_202_Analytics_Finances_Gains_Investments.png') }}" class="w-auto h-auto" alt="about image"/>
                    </div>
                </div>
                <div class="border"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div>
                        <img src="{{ asset('/img/Group 26.png') }}" class="w-auto h-auto" alt="about image"/>
                    </div>
                    <div class="text-white xs:pl-3 lg:pl-20">
                        <div class="text-xl font-bold text-left max-w-3xl">
                            Fondos comunes<br>de inversión
                        </div>
                        <div class="text-base text-left max-w-3xl pt-5">
                            Como agente ACDI, te ofrecemos acceso a un amplio<br>abanico de fondos comunes de inversión gestionados<br>activamente por especialistas. Fondos en pesos o en<br>dólares que invierten en instrumentos de renta fija,<br>variable o mixta.
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-section-42"></div>
@endsection