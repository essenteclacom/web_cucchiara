@extends('layouts.main')

@section('title', 'Services')

@section('content')
    {{-- slide --}}
    <div>
        <div style="background-image: url({{ asset('/img/services_02.png')}})" class="bg-cover bg-center bg-no-repeat xxs:h-48 xs:h-48 sm:h-84 lg:h-64 xl:h-96">
            <div class="container flex items-center justify h-full">
                <p class="font-body text-white text-center text-shadow xxs:text-xs xs:text-base sm:text-1xl md:text-2xl lg:text-2xl xl:text-2xl">
                    Cucchiara is part of the local investment community as a member of the Camara de Agentes de Bolsa and has an international presence as an associate of EMTA, an international investment community focused on the development of emerging markets.
                </p>
                <div class="xxs:h-3 xs:h-20 sm:h-32 md:h-48 lg:h-80 xl:h-96"></div>
            </div>
        </div>
        <div class="bg-secondary">
            <div class="container xxs:px-20 lg:px-32 xl:px-56">
                <div class="flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Portfolio<br>Assessment
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-right max-w-3xl pt-5">
                            Through qualified professionals, we provide you with tailored investment<br>
                            solutions, proposing strategies that align with your risk profile and your<br>
                            objectives.
                        </div>
                    </div>
                    <div class="ml-4">
                        <img src="{{ asset('/img/Group 1.png') }}" class="xxs:w-56 sm:w-auto" alt="about image"/>
                    </div>
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="mr-4">
                        <img src="{{ asset('/img/_219_Duty_Finance_Marketing_Money.png') }}" class="xxs:w-56 sm:w-auto" alt="about image"/>
                    </div>
                    <div class="text-white xs:pl-3 lg:pl-20">
                        <div class="text-xl font-bold text-left max-w-3xl">
                            Research
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-left max-w-3xl pt-5">
                            We regularly publish economic and market research reports with<br>
                            valuable information for decision making.<br>
                            We organize talks and webinars in order to promote the exchange of<br>
                            knowledge and opinion between clients and specialists.
                        </div>
                    </div>
                    
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="text-white xs:pr-3 lg:pr-20">
                        <div class="text-xl font-bold text-right max-w-3xl">
                            Financial Operations
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-right max-w-3xl pt-5">
                            We give you access to all Argentine markets to operate the public offering<br>
                            instruments authorized by the CNV: Public securities, corporate bonds, stock,<br>
                            CEDEARs, financial trusts, stock sureties, options, futures, stock market<br>
                            promissory notes, deferred payment checks, Common Funds Investment, etc.
                        </div>
                    </div>
                    <div class="ml-4">
                        <img src="{{ asset('/img/_202_Analytics_Finances_Gains_Investments.png') }}" class="xxs:w-56 sm:w-auto" alt="about image"/>
                    </div>
                </div>
                <div class="border border-services-c"></div>
                <div class="container flex flex-row lg:px-40 py-32 items-center justify-center">
                    <div class="mr-4">
                        <img src="{{ asset('/img/Group 26.png') }}" class="xxs:w-56 sm:w-auto" alt="about image"/>
                    </div>
                    <div class="text-white xs:pl-3 lg:pl-20">
                        <div class="text-xl font-bold text-left max-w-3xl">
                            Mutual / Investment<br> Funds
                        </div>
                        <div class="xxs:text-xs xs:text-base sm:text-base text-left max-w-3xl pt-5">
                            As an ACDI agent, we offer you access to a wide range of mutual funds<br>
                            actively managed by specialists. Funds in pesos or dollars that invest in fixed,<br>
                            variable or mixed income instruments.
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{-- end slide --}}
    <div class="h-[10rem]"></div>
@endsection