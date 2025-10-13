@extends('layouts.app')

@section('title', 'Contacto')
@section('description', 'Ponte en contacto con FullGas para cualquier consulta, sugerencia o comentario. Estamos aquí para ayudarte.')
@section('content')
    <x-heroTitle image="images/headers/header-contacto.jpg" title="FULLGAS" paragraph="TE ESCUCHA" overlay="bg-black/25" />


    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-md h-fit">
                    <h2 class="text-lg md:text-xl font-extrabold text-[#d11a50] mb-12">
                        {{ __('¡PONTE EN CONTACTO CON NOSOTROS!') }}
                    </h2>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-red-100 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">{{ __('Teléfono') }}</h3>
                                <p class="text-gray-600">+52 (01) 800 999 0367</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-red-100 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">{{ __('Facturación y Ventas') }}</h3>
                                <p class="text-gray-600">facturacion@fullgas.com.mx</p>
                                <p class="text-gray-600">ventas@fullgas.com.mx</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-red-100 p-3 rounded-full mr-4">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg text-gray-800">{{ __('Horario') }}</h3>
                                <p class="text-gray-600">
                                    {{ __('Horarios de atención oficinas corporativas') }}
                                    9:00 am a 06:00 pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <x-contact-form />
            </div>
        </div>
    </section>
@endsection
