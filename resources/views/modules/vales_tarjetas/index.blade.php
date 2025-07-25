@extends('layouts.app')

@section('title', 'Vales y Tarjetas')

@section('content')
    <x-heroTitle image="images/headers/header-vales.jpg" title="TU ALIADO EN ENERGÍA" paragraph="Para tu flotilla empresarial"
        overlay="bg-black/25" />


    <section class="relative h-screen bg-fixed bg-center bg-cover flex items-center justify-center"
        style="background-image: url('images/fullgas-2.jpg');">
        <div class="absolute inset-0 flex flex-col items-center justify-center bg-black/50 space-y-6">

            <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" fill="#f4f4f5" viewBox="0 0 256 256">
                <path
                    d="M224,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H224a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48Zm0,16V88H32V64Zm0,128H32V104H224v88Zm-16-24a8,8,0,0,1-8,8H168a8,8,0,0,1,0-16h32A8,8,0,0,1,208,168Zm-64,0a8,8,0,0,1-8,8H120a8,8,0,0,1,0-16h16A8,8,0,0,1,144,168Z">
                </path>
            </svg>

            <div class="text-white text-lg font-bold text-center w-full px-6">
                {{ __('Trabajamos con diferentes tecnologías que facilitan la compra de combustible; desde vales prepagados hasta tarjetas inteligentes, los cuales facilitan asignar y controlar presupuestos de consumo a nuestros clientes.') }}
            </div>

            <a href="http://enpuntomovil.com:6099/" target="_blank"
                class="bg-[#d11a50] text-white px-6 py-2 rounded-md hover:bg-red-600">
                Panel de control de viajes
            </a>
        </div>
    </section>

    <section class="bg-[#000000] py-8 px-6">
        <div class="max-w-5xl mx-auto space-y-8">

            <div class="grid md:grid-cols-2 gap-6 items-center">
                <div class="flex justify-center">
                    <img src="{{ asset('images/vales/vales-img-01.jpg') }}" alt="Imagen relacionada"
                        class="w-full max-w-md rounded shadow-lg object-cover">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-[#f4f4f5] mb-4">VALES DE GASOLINA</h2>
                    <p class="text-[#f4f4f5] mb-2">
                        {{ __('Nuestros vales prepago son la mejor opción del mercado, ya que brindan los siguientes beneficios:') }}
                    </p>
                    <ul class="list-none text-[#f4f4f5] space-y-2">
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            0% de comisión.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            5 controles de seguridad que evitan duplicidad o falsificación.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Deducible 100% ante el SAT.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Facturación en base a tus necesidades.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Entrega inmediata.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6 items-center">
                <div>
                    <h2 class="text-2xl font-bold text-[#f4f4f5] mb-4">TARJETAS DE GASOLINA</h2>
                    <p class="text-[#f4f4f5] mb-2">
                        {{ __('Éste ha sido por años , uno de los beneficios más grandes de FullGas México, ya que estas tarjetas permiten establecer ciertos montos para cada uno de los choferes de una empresa o manejar tarjetas abiertas.') }}
                    </p>
                    <ul class="list-none text-[#f4f4f5] space-y-2">
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Maximizas la rentabilidad manteniendo la propiedad.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Patrimonio seguro: Con el respaldo de una empresa global y experiencia en el libre mercado.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Traje a la medida: Contratos con plazos flexibles, sin penalizaciones y condiciones ganar-ganar.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Negocio sin complicaciones: FullGas se encarga de los aspectos operativos, logísticos y
                            jurídicos.
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/vales/vales-img-02.jpg') }}" alt="Imagen relacionada"
                        class="w-full max-w-md rounded shadow-lg object-cover">
                </div>
            </div>

        </div>
    </section>

@endsection
