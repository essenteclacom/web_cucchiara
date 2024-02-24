@extends('layouts.main')

@section('title', 'Regulations')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/Derecho.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Cucchiara y Cía S.A. adheres to and rigorously complies with all current regulations of the Argentine capital market, ensuring the transparency and integrity of all its operations.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container">
                <div class="flex flex-col xxs:items-center xs:items-center sm:items-start md:items-start lg:items-start xl:items-start justify-center pt-5 pb-32">
                    <div class="text-white xs:pr-0 lg:pr-20 pt-32 pb-10">
                        <div class="text-xl font-bold max-w-3xl xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left">
                        Regulations
                    </div>
                </div>
                <div class="flex xxs:flex-col xs:flex-col sm:flex-row md:flex-row lg:flex-row xl:flex-row">
                    <div class="text-white xs:pr-0 lg:pr-20 pb-16">
                        <div class="text-base xxs:text-center xs:text-center sm:text-left md:text-left lg:text-left xl:text-left max-w-3xl">
                            Law 26,831 of Argentina, also known as the "Capital Market Law", has the main objective of promoting the development of the capital market in the country. This law seeks to encourage the participation of investors, strengthen transparency in financial operations, and establish regulations for the issuance, negotiation and public offering of securities. Likewise, Law 27,440 complements this legal framework by incorporating measures to boost productive financing, facilitate access for SMEs to the capital market and promote investment in infrastructure projects.
                            <br/><br/>
                            The National Securities Commission (CNV), the body in charge of regulating and supervising the securities and capital markets in the country, requires capital market participants to register as agents in different categories depending on the role they will play. Under this framework, Cucchiara y Cía S.A. is registered as a Negotiation and Comprehensive Settlement and Compensation Agent under No. 256 and as a Comprehensive Placement Agent of Common Investment Funds under No. XX of the CNV. (bold)</b>
                            <br/><br/>
                            In this context, the CNV Rules play a crucial role by establishing specific regulations to guarantee the integrity and efficiency of the market, ensuring the protection of investors. For its part, Regulatory Decree 1023/2023 complements the aforementioned laws, by defining operational and procedural aspects, thus contributing to the effective implementation of the legal framework.
                        </div>
                        <div class="flex xxs:justify-center xs:justify-center sm:justify-start pt-10 ">
                            <a class="block text-color-cucchiara bg-cyan-20 text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                                Public Record<br>Cucchiara y Cía.
                            </a>
                        </div>
                    </div>
                    <div>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Ley Mercado de<br>Capitales N° 26.831
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Decreto Reglamentario<br>Nº 1023/2013
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl w-72 mb-2">
                            Rule text<br>CNV 2013
                        </a>
                        <a class="block text-color-cucchiara bg-button-reg text-center text-base font-body font-bold py-4 px-8 rounded-xl ">
                            Financiamiento Productivo<br>Ley 27.440
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection
