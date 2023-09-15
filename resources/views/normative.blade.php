@extends('layouts.main')

@section('title', 'Services')

@section('content')
    {{-- slide --}}
    <div>
        <div>
            <img src="{{ asset('/img/pexels.png') }}" class="w-full h-full" alt="about image"/>
            <div class="absolute inset-x-0 top-96 mx-32">
                <p class="font-body text-3xl text-white text-center font-medium">
                    Cucchiara y Cía S.A. se adhiere y cumple rigurosamente todas las<br>normativas vigentes del mercado de capitales argentino velando por<br>la transparencia y la integridad de todas sus operaciones.
                </p>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container">
                <div class="flex flex-row px-40 py-32 items-center justify-center">
                    <div class="text-white pr-20">
                        <div class="text-xl font-bold text-left max-w-3xl pb-4">
                            Normativas
                        </div>
                        <div class="text-base text-left max-w-3xl pt-5">
                            La Ley 26.831 de Argentina, también conocida como "Ley de Mercado de Capitales", tiene como objetivo principal promover el desarrollo del mercado de capitales en el país. Esta ley busca fomentar la participación de inversores, fortalecer la transparencia en las operaciones financieras, y establecer normativas para la emisión, negociación y oferta pública de valores. Asimismo, la Ley 27.440 complementa este marco legal al incorporar medidas para dinamizar el financiamiento productivo, facilitar el acceso de las PYMEs al mercado de capitales y promover la inversión en proyectos de infraestructura.<br><br>
La Comisión Nacional de Valores (CNV), organismo encargado de regular y supervisar los mercados de valores y capitales en el país, obliga a los participantes del mercado de capitales a inscribirse como agente en distintas categorías en virtud del rol que vayan a desempeñar. Bajo este marco, <b>Cucchiara y Cía S.A. se encuentra inscripto como Agente de Negociación y de Liquidación y Compensación Integral bajo el Nº 256 y como Agente de Colocación Integral de Fondos Comunes de Inversión bajo el N° 38 de la CNV.</b><br><br>
En este contexto, las Normas de la CNV desempeñan un papel crucial al establecer regulaciones específicas para garantizar la integridad y eficiencia del mercado, asegurando la protección de los inversores. Por su parte, el Decreto Reglamentario 1023/2023 complementa las leyes anteriormente mencionadas, al definir aspectos operativos y procedimentales, contribuyendo así a la implementación efectiva del marco legal.
                        </div>
                    </div>
                    <div>
                        <div class="pb-2">
                            <button class="text-color-cucchiara rounded bg-white px-12 py-2 font-body text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring">
                                Ley Mercado de Capitales N° 26.831
                            </button>
                        </div>
                        <div class="pb-2">
                            <button class="text-color-cucchiara rounded bg-white px-12 py-2 font-body text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring">
                                Decreto Reglamentario Nº 1023/2013
                            </button>
                        </div>
                        <div class="pb-2">
                            <button class="text-color-cucchiara rounded bg-white px-12 py-2 font-body text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring">
                                Ley de Financiamiento Productivo N° 27.440 
                            </button>
                        </div>
                        <div class="pb-2">
                            <button class="text-color-cucchiara rounded bg-white px-12 py-5 font-body text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring">
                                Texto de Normas CNV 2013
                            </button>
                        </div>
                    </div>    
                    <!---->
                </div>
                <div class="flex flex-row pl-40 pb-16 items-left justify-left">
                    <button class="text-color-cucchiara rounded bg-cyan-20 px-12 py-2 font-body text-base font-bold transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring">
                        Registros Públicos<br>Cucchiara y Cía. 
                    </button>
                </div>
                <div class="border"></div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-section-42"></div>
@endsection