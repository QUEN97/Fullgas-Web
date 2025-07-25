@extends('layouts.app')

@section('title', 'Ubicaciones')

@section('content')
    <x-heroTitle image="images/headers/header-ubicaciones.png" title="ESTACIONES DE SERVICIO"
        paragraph="Encuentra tu estación más cercana" overlay="bg-black/50" />

    <section id="map-section" class="py-12 bg-gray-50" x-data="mapApp()">
        <x-mapaEstaciones />
    </section>

    <section class="py-16 bg-white" x-data="estacionesApp()">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-[#d11a50] mb-12">{{ __('Estaciones de Servicio') }}</h2>

            <!-- Filtro por zona -->
            <x-filtroZona />

            <!-- Mensajes de estado -->
            <div x-show="loadingLocation" class="mb-6 p-4 bg-blue-50 text-blue-800 rounded-lg flex items-center">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                        stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor"
                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                    </path>
                </svg>
                <span>Buscando tu ubicación para mostrar las estaciones más cercanas...</span>
            </div>

            <div x-show="locationError" class="mb-6 p-4 bg-yellow-50 text-yellow-800 rounded-lg flex items-center">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
                <div>
                    <p x-text="locationError"></p>
                    <button @click="getUserLocation()" class="mt-2 text-blue-600 underline flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                        </svg>
                        Intentar nuevamente
                    </button>
                </div>
            </div>

            <!-- Listado de estaciones -->
            <x-listadoEstaciones />

            <!-- Paginación -->
            <x-paginacionEstaciones />
        </div>
    </section>
@endsection
