@extends('layouts.main')

@section('title', 'Services')

@section('content')
    {{-- slide --}}
    <div>
        <div>
            <img src="{{ asset('/img/services_01.png') }}" class="w-full h-full pt-36" alt="about image"/>
            <div class="absolute inset-x-0 top-96 mx-32">
                <p class="font-body text-lg text-white text-center">
                    La actividad de la empresa está dedicada a canalizar las necesidades de los pequeños y medianos ahorristas e inversores y clientes institucionales a través de todos los instrumentos que tienen otorgada oferta pública por la Comisión Nacional de Valores.
                </p>
            </div>
        </div>
        <div class="bg-primary">
            <div class="container">
                <div class="flex flex-row px-40 py-32">
                    <div class="text-white">
                        <div class="font-bold text-right pr-10 max-w-3xl">
                            Administración
                            de carteras
                        </div>
                        <div class="text-right pr-10 max-w-3xl pt-5">
                            A través de profesionales idóneos te brindamos soluciones de inversión a medida, planteando estrategias que se alineen con el perfil de riesgo y los objetivos de cada inversor.
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('/img/services_rectangle.png') }}" class="w-48 h-40" alt="about image"/>
                    </div>
                </div>
                <div class="border"></div>
                <div class="container flex flex-row px-40 py-32">
                    <div class="text-white">
                        <div class="font-bold text-right pr-10 max-w-3xl">
                            Research
                        </div>
                        <div class="text-right pr-10 max-w-3xl pt-5">
                            Publicamos regularmente informes económicos y de investigación de mercado con información valiosa para la toma de decisiones. Organizamos charlas y seminarios web con el fin de promover el intercambio de conocimiento y opinión entre clientes y especialistas.
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('/img/services_rectangle.png') }}" class="w-48 h-40" alt="about image"/>
                    </div>
                </div>
                <div class="border"></div>
                <div class="container flex flex-row px-40 py-32">
                    <div class="text-white">
                        <div class="font-bold text-right pr-10 max-w-3xl">
                            Operaciones financieras
                        </div>
                        <div class="text-right pr-10 max-w-3xl pt-5">
                            Te damos acceso a todos los mercados argentinos para operar los instrumentos de oferta pública autorizados por la CNV: Títulos públicos, obligaciones negociables, acciones, CEDEARs, fideicomisos financieros, cauciones bursátiles, opciones, futuros, pagarés bursátiles, cheques de pago diferidos, FCI, etc.
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('/img/services_rectangle.png') }}" class="w-48 h-40" alt="about image"/>
                    </div>
                </div>
                <div class="border"></div>
                <div class="container flex flex-row px-40 py-32">
                    <div class="text-white">
                        <div class="font-bold text-right pr-10 max-w-3xl">
                            Fondos comunes de inversión
                        </div>
                        <div class="text-right pr-10 max-w-3xl pt-5">
                            Te ofrecemos un amplio abanico de fondos comunes de inversión gestionados activamente por especialistas. Fondos en pesos, dólares, renta fija, variable o mixta.
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('/img/services_rectangle.png') }}" class="w-48 h-40" alt="about image"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
@endsection