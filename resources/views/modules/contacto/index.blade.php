@extends('layouts.app')

@section('title', 'Contacto')

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

                <div class="md:col-span-2 bg-[#f4f4f5] p-8 rounded-lg shadow-md" x-data="contactForm()">
                    <h2 class="text-2xl font-bold text-[#d11a50] mb-6">
                        {{ __('Completa el formato y en breve nos pondremos en contacto contigo.') }}</h2>

                    <div x-show="showForm" x-transition>
                        <form id="contact-form" @submit.prevent="submitForm" class="space-y-6">
                            @csrf
                            <div class="flex gap-2">
                                <div>
                                    <label class="block text-left text-sm font-bold text-neutral-700 mb-1">Nombre <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="nombre" required
                                        class="w-full rounded border bg-white border-neutral-300 px-4 py-2 focus:ring-2 focus:ring-[#d11a50] focus:outline-none" />
                                </div>

                                <div>
                                    <label class="block text-left text-sm font-bold text-neutral-700 mb-1">Apellido <span
                                            class="text-red-500">*</span></label>
                                    <input type="text" name="apellido" required
                                        class="w-full rounded border bg-white border-neutral-300 px-4 py-2 focus:ring-2 focus:ring-[#d11a50] focus:outline-none" />
                                </div>
                            </div>

                            <div>
                                <label class="block text-left text-sm font-bold text-neutral-700 mb-1">Correo electrónico
                                    <span class="text-red-500">*</span></label>
                                <input type="email" name="correo" required
                                    class="w-full rounded border bg-white border-neutral-300 px-4 py-2 focus:ring-2 focus:ring-[#d11a50] focus:outline-none" />


                            </div>

                            <div>
                                <label class="block text-left text-sm font-bold text-neutral-700 mb-1">¿Sobre qué deseas
                                    contactarnos? <span class="text-red-500">*</span></label>
                                <select name="motivo" required
                                    class="w-full rounded border border-neutral-300 px-4 py-2 bg-white focus:ring-2 focus:ring-[#d11a50] focus:outline-none">
                                    <option disabled selected value="">Selecciona una opción</option>
                                    <option value="Quiero Facturar">Quiero Facturar</option>
                                    <option value="Licencia Fullgas">Licencia Fullgas</option>
                                    <option value="Quiero ser Proveedor">Quiero ser Proveedor</option>
                                    <option value="Quejas y Sugerencias">Quejas y Sugerencias</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-left text-sm font-bold text-neutral-700 mb-1">Mensaje
                                    (opcional)</label>
                                <textarea name="mensaje" maxlength="1500"
                                    class="w-full h-36 rounded border bg-white border-neutral-300 px-4 py-2 resize-none focus:ring-2 focus:ring-[#d11a50] focus:outline-none"
                                    placeholder="Escribe tu mensaje aquí..."></textarea>
                                <p class="text-xs text-neutral-500 text-left mt-1">Máximo 1500 caracteres</p>
                            </div>

                            <div>
                                <button type="submit" :disabled="isLoading"
                                    class="bg-[#d11a50] text-white px-6 py-3 rounded-md font-medium hover:bg-red-700 transition duration-300 w-full md:w-auto flex items-center justify-center"
                                    :class="{ 'opacity-50 cursor-not-allowed': isLoading }">
                                    <span x-show="!isLoading">{{ __('Enviar Mensaje') }}</span>
                                    <span x-show="isLoading" class="flex items-center">
                                        <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                                stroke="currentColor" stroke-width="4"></circle>
                                            <path class="opacity-75" fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                            </path>
                                        </svg>
                                        {{ __('Enviando') }}...
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <template x-if="showSuccess">
                        <div class="fixed inset-0 flex items-center justify-center  z-50" x-transition>
                            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md w-full text-center">
                                <div class="flex justify-center mb-4">
                                    <svg class="w-16 h-16 text-[#d11a50]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-[#d11a50] mb-4">¡{{ __('Mensaje enviado con éxito') }}!
                                </h3>
                                <p class="text-gray-600 mb-6">
                                    {{ __('Gracias por contactarnos. Nos pondremos en contacto contigo pronto') }}.
                                </p>
                                <button @click="resetForm()"
                                    class="bg-[#d11a50] text-white px-6 py-2 rounded-md font-medium hover:bg-red-700 transition duration-300">
                                    {{ __('Cerrar') }}
                                </button>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </section>
@endsection
