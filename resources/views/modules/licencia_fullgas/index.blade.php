@extends('layouts.app')

@section('title', 'Licencia')

@section('content')
    <x-heroTitle image="images/headers/header-licencia.jpg" title="SÚMATE Y ADMINISTRA" paragraph="TÚ PATRIMIONIO"
        overlay="bg-black/25" />

    <section class="py-8 px-6 bg-[#0d0d0d]">
        <div class="max-w-xl md:max-w-4xl mx-auto">

            <h2 class="text-2xl font-bold text-[#f4f4f5] text-center mb-4">{{ __('LICENCIA DE USO DE MARCA') }}</h2>
            <p class="text-[#f4f4f5] text-lg">
                FullGas Gasolineras,
                {{ __('a través del programa “Administra tu Patrimonio”, comparte su infraestructura con los empresarios
                                                                                                                gasolineros.
                                                                                                                Este programa permite a los dueños mantener la propiedad de sus gasolineras a la par de integrarlas a una
                                                                                                                sólida estructura
                                                                                                                operativa con gran alcance y solidez mediante una sociedad de negocio') }}.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6 place-items-center">
            <img src="{{ asset('images/headers/logo-1.png') }}" alt="Imagen-fg 1"
                class="w-full max-w-xs h-auto object-contain" loading="lazy">
            <img src="{{ asset('images/headers/logo-2.png') }}" alt="Imagen-fg 2"
                class="w-full max-w-xs h-auto object-contain" loading="lazy">
        </div>
    </section>

    <section class="bg-[#d11a50] py-8 px-6">
        <div class="max-w-4xl grid grid-cols-1 md:grid-cols-3 gap-4 mx-auto">
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M232,208a8,8,0,0,1-8,8H32a8,8,0,0,1-8-8V48a8,8,0,0,1,16,0V156.69l50.34-50.35a8,8,0,0,1,11.32,0L128,132.69,180.69,80H160a8,8,0,0,1,0-16h40a8,8,0,0,1,8,8v40a8,8,0,0,1-16,0V91.31l-58.34,58.35a8,8,0,0,1-11.32,0L96,123.31l-56,56V200H224A8,8,0,0,1,232,208Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">
                        {{ __('PRESENCIA QUE NOS HACE RENTABLES') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    FullGas
                    {{ __('opera con más de 100 estaciones en México y Centroamérica. Gracias a su sólida estructura logra
                                                                                mejores
                                                                                negociaciones de precios con proveedores, economías de escala y procesos altamente sistematizados con lo
                                                                                que se
                                                                                reducen los costos y se maximiza la eficiencia') }}.
                </p>
            </div>
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M134.62,123.51a8,8,0,0,1,.81,7.46l-16,40A8,8,0,0,1,104.57,165l11.61-29H96a8,8,0,0,1-7.43-11l16-40A8,8,0,1,1,119.43,91l-11.61,29H128A8,8,0,0,1,134.62,123.51ZM248,86.63V168a24,24,0,0,1-48,0V128a8,8,0,0,0-8-8H176v88h16a8,8,0,0,1,0,16H32a8,8,0,0,1,0-16H48V56A24,24,0,0,1,72,32h80a24,24,0,0,1,24,24v48h16a24,24,0,0,1,24,24v40a8,8,0,0,0,16,0V86.63A8,8,0,0,0,229.66,81L210.34,61.66a8,8,0,0,1,11.32-11.32L241,69.66A23.85,23.85,0,0,1,248,86.63ZM160,208V56a8,8,0,0,0-8-8H72a8,8,0,0,0-8,8V208Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">{{ __('EXPERIENCIA ENERGÉTICA') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    {{ __('FullGas cuenta con la expertise del sector energético y libre comercio') }}.
                </p>
            </div>
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M244.8,150.4a8,8,0,0,1-11.2-1.6A51.6,51.6,0,0,0,192,128a8,8,0,0,1-7.37-4.89,8,8,0,0,1,0-6.22A8,8,0,0,1,192,112a24,24,0,1,0-23.24-30,8,8,0,1,1-15.5-4A40,40,0,1,1,219,117.51a67.94,67.94,0,0,1,27.43,21.68A8,8,0,0,1,244.8,150.4ZM190.92,212a8,8,0,1,1-13.84,8,57,57,0,0,0-98.16,0,8,8,0,1,1-13.84-8,72.06,72.06,0,0,1,33.74-29.92,48,48,0,1,1,58.36,0A72.06,72.06,0,0,1,190.92,212ZM128,176a32,32,0,1,0-32-32A32,32,0,0,0,128,176ZM72,120a8,8,0,0,0-8-8A24,24,0,1,1,87.24,82a8,8,0,1,0,15.5-4A40,40,0,1,0,37,117.51,67.94,67.94,0,0,0,9.6,139.19a8,8,0,1,0,12.8,9.61A51.6,51.6,0,0,1,64,128,8,8,0,0,0,72,120Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">{{ __('EXPERIENCIA ENERGÉTICA') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    FullGas
                    {{ __('cuenta con un amplio equipo de Operaciones, Auditoría, Servicio al Cliente, Jurídico, Marketing,
                                                                                Tecnologías de la Información y procesos que aseguran rentabilidad a los socios y una experiencia
                                                                                siempre grata y hospitalaria') }}.
                </p>
            </div>
        </div>
    </section>
    <section class="bg-gray-100 py-8 px-6">
        <div class="max-w-5xl mx-auto space-y-8">

            <div class="grid md:grid-cols-2 gap-6 items-center">
                 <div class="flex justify-center">
                    <img src="{{ asset('images/licencia/licencia_1.jpg') }}" alt="Imagen relacionada"
                        class="w-full max-w-md rounded shadow-lg object-cover">
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">¿CÓMO FUNCIONA EL PROGRAMA?</h2>
                    <ul class="list-none text-gray-700 space-y-2">
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Mantienes la propiedad de tu negocio.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Sin preocupación de los sistemas de administración y tecnología.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Maximiza utilidades por escala y volúmenes.
                        </li>
                        <li class="flex items-center gap-2">
                            <x-icons.check />
                            Con especialistas en logística de almacenamiento y distribución.
                        </li>
                    </ul>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-6 items-center">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">VENTAJAS DEL PROGRAMA</h2>
                    <ul class="list-none text-gray-700 space-y-2">
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
                    <img src="{{ asset('images/licencia/licencia_2.jpg') }}" alt="Imagen relacionada"
                        class="w-full max-w-md rounded shadow-lg object-cover">
                </div>
            </div>

        </div>
    </section>

@endsection
