@extends('layouts.principal')

@section('title', 'Regulations')

@section('content')
    {{-- slide --}}
    <div>
        <div>
            <img src="{{ asset('/img/Derechos.jpg') }}" class="w-full h-full" alt="about image"/>
            <div class="container absolute inset-x-0 xxs:top-20 xs:top-24 sm:top-32 md:top-32 lg:top-60 xl:top-80">
                <p class="font-body text-white text-center text-shadow xxs:text-xs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Cucchiara y Cía S.A. se adhiere y cumple rigurosamente todas las normativas vigentes del mercado de capitales argentino velando por la transparencia y la integridad de todas sus operaciones.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container">
                <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row py-32 items-center justify-center">
                    <div class="text-white xs:pr-0 lg:pr-20">
                        <div class="text-xl font-bold xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl">
                            Normativas
                        </div>
                        <div class="text-base xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl pt-5">
                            La Ley 26.831 de Argentina, también conocida como "Ley de Mercado de Capitales", tiene como objetivo principal promover el desarrollo del mercado de capitales en el país. Esta ley busca fomentar la participación de inversores, fortalecer la transparencia en las operaciones financieras, y establecer normativas para la emisión, negociación y oferta pública de valores. Asimismo, la Ley 27.440 complementa este marco legal al incorporar medidas para dinamizar el financiamiento productivo, facilitar el acceso de las PYMEs al mercado de capitales y promover la inversión en proyectos de infraestructura. 
                            <br/><br/>
                            La Comisión Nacional de Valores (CNV), organismo encargado de regular y supervisar los mercados de valores y capitales en el país, obliga a los participantes del mercado de capitales a inscribirse como agente en distintas categorías en virtud del rol que vayan a desempeñar. Bajo este marco, <b>Cucchiara y Cía S.A. se encuentra inscripto como Agente de Negociación y de Liquidación y Compensación Integral bajo el Nº 256 y como Agente de Colocación Integral de Fondos Comunes de Inversión bajo el N° 38 de la CNV.</b>
                            <br/><br/>
                            En este contexto, las Normas de la CNV desempeñan un papel crucial al establecer regulaciones específicas para garantizar la integridad y eficiencia del mercado, asegurando la protección de los inversores. Por su parte, el Decreto Reglamentario 1023/2023 complementa las leyes anteriormente mencionadas, al definir aspectos operativos y procedimentales, contribuyendo así a la implementación efectiva del marco legal.
                        </div>
                        <div class="flex xxs:justify-center xs:justify-center sm:justify-start pt-10 ">
                            <a class="block text-color-cucchiara bg-cyan-20 text-center text-base font-body font-bold p-4 rounded w-60 mb-2">
                                Registros Públicos<br>Cucchiara y Cía. 
                            </a>
                        </div>
                    </div>
                    <div clas="text-center">
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold p-4 rounded mb-2">
                            Ley Mercado de<br>Capitales N° 26.831
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold p-4 rounded mb-2">
                            Decreto Reglamentario<br>Nº 1023/2013
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold p-4 rounded mb-2">
                            Ley de Financiamiento<br>Productivo N° 27.440 
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold p-4 rounded">
                            Texto de Normas CNV 2013 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection