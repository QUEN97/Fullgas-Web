@extends('layouts.app')

@section('title', 'El Buen Trato')

@section('content')
    <x-heroTitle image="images/headers/header-buen-trato.jpg" title="¡Es nuestra gran diferencia!" paragraph=""
        subparagraph="Programa de generación de bienestar el cual busca mejorar y transformar la calidad de vida de las personas que interactúan con la familia FullGas."
        overlay="bg-black/50" />

    <section class="bg-[#d11a50] py-8 px-6">
        <div class="max-w-4xl grid grid-cols-1 md:grid-cols-3 gap-4 mx-auto">
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M251.76,88.94l-120-64a8,8,0,0,0-7.52,0l-120,64a8,8,0,0,0,0,14.12L32,117.87v48.42a15.91,15.91,0,0,0,4.06,10.65C49.16,191.53,78.51,216,128,216a130,130,0,0,0,48-8.76V240a8,8,0,0,0,16,0V199.51a115.63,115.63,0,0,0,27.94-22.57A15.91,15.91,0,0,0,224,166.29V117.87l27.76-14.81a8,8,0,0,0,0-14.12ZM128,200c-43.27,0-68.72-21.14-80-33.71V126.4l76.24,40.66a8,8,0,0,0,7.52,0L176,143.47v46.34C163.4,195.69,147.52,200,128,200Zm80-33.75a97.83,97.83,0,0,1-16,14.25V134.93l16-8.53ZM188,118.94l-.22-.13-56-29.87a8,8,0,0,0-7.52,14.12L171,128l-43,22.93L25,96,128,41.07,231,96Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">
                        {{ __('CAPACITACIÓN') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    {{ __('Personal capacitado para brindar una atención de calidad en cada una de nuestras estaciones de servicio.') }}
                </p>
            </div>
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M224,128a8,8,0,0,1-8,8H128a8,8,0,0,1,0-16h88A8,8,0,0,1,224,128ZM128,72h88a8,8,0,0,0,0-16H128a8,8,0,0,0,0,16Zm88,112H128a8,8,0,0,0,0,16h88a8,8,0,0,0,0-16ZM82.34,42.34,56,68.69,45.66,58.34A8,8,0,0,0,34.34,69.66l16,16a8,8,0,0,0,11.32,0l32-32A8,8,0,0,0,82.34,42.34Zm0,64L56,132.69,45.66,122.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Zm0,64L56,196.69,45.66,186.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">{{ __('AUDITORÍA') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    {{ __('Evaluación continua de procesos en cada una de nuestras estaciones de servicio.') }}
                </p>
            </div>
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M216,96A88,88,0,1,0,72,163.83V240a8,8,0,0,0,11.58,7.16L128,225l44.43,22.21A8.07,8.07,0,0,0,176,248a8,8,0,0,0,8-8V163.83A87.85,87.85,0,0,0,216,96ZM56,96a72,72,0,1,1,72,72A72.08,72.08,0,0,1,56,96ZM168,227.06l-36.43-18.21a8,8,0,0,0-7.16,0L88,227.06V174.37a87.89,87.89,0,0,0,80,0ZM128,152A56,56,0,1,0,72,96,56.06,56.06,0,0,0,128,152Zm0-96A40,40,0,1,1,88,96,40,40,0,0,1,128,56Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">{{ __('INCENTIVOS') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    {{ __('Reconocimiento al desempeño de nuestro personal.') }}
                </p>
            </div>
        </div>
    </section>

    <section x-data="galeriaBuenTrato()" class="py-12 px-4 bg-[#f4f4f5]">
    <div class="max-w-7xl mx-auto">
        <!-- Título de la sección -->
        <h2 class="text-3xl font-bold text-center text-[#d11a50] mb-12">Nuestro Equipo en Acción</h2>

        <!-- Grid tipo Bento mejorado -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <!-- Imagen grande (2x2) -->
            <button @click="abrirModal(0)"
                class="group overflow-hidden rounded-xl shadow-lg row-span-2 col-span-2 relative transform hover:scale-[1.02] transition cursor-pointer">
                <img :src="imagenes[0].src" :alt="imagenes[0].alt" class="object-cover h-full w-full" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                    <p class="text-white font-medium text-lg" x-text="imagenes[0].alt"></p>
                </div>
            </button>

            <!-- Imagenes pequeñas -->
            <template x-for="(img, index) in imagenes.slice(1, 5)" :key="index">
                <button @click="abrirModal(index + 1)"
                    class="group overflow-hidden rounded-xl shadow-lg aspect-square relative transform hover:scale-[1.02] transition cursor-pointer">
                    <img :src="img.src" :alt="img.alt" class="object-cover h-full w-full" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-3">
                        <p class="text-white font-medium text-sm" x-text="img.alt"></p>
                    </div>
                </button>
            </template>

            <!-- Imagen vertical -->
            <button @click="abrirModal(5)"
                class="group overflow-hidden rounded-xl shadow-lg row-span-2 col-span-1 relative transform hover:scale-[1.02] transition cursor-pointer">
                <img :src="imagenes[5].src" :alt="imagenes[5].alt" class="object-cover h-full w-full" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                    <p class="text-white font-medium text-lg" x-text="imagenes[5].alt"></p>
                </div>
            </button>

            <!-- Últimas dos imágenes -->
            <template x-for="(img, index) in imagenes.slice(6)" :key="index">
                <button @click="abrirModal(index + 6)"
                    class="group overflow-hidden rounded-xl shadow-lg aspect-square relative transform hover:scale-[1.02] transition cursor-pointer">
                    <img :src="img.src" :alt="img.alt" class="object-cover h-full w-full" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-3">
                        <p class="text-white font-medium text-sm" x-text="img.alt"></p>
                    </div>
                </button>
            </template>
        </div>
    </div>

    <!-- Modal -->
    <div x-show="modalAbierto" @click.away="cerrarModal" class="fixed inset-0 z-50 bg-black/75 flex items-center justify-center p-4">
        <div class="relative max-w-4xl w-full max-h-[90vh]">
            <!-- Botón cerrar -->
            <button @click="cerrarModal" class="absolute -top-10 right-0 text-white hover:text-[#d11a50] transition">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <!-- Contenido del modal -->
            <div class="bg-white rounded-xl overflow-hidden shadow-2xl flex flex-col md:flex-row h-full">
                <!-- Imagen -->
                <div class="md:w-2/3 h-64 md:h-auto">
                    <img :src="imagenes[actual].src" :alt="imagenes[actual].alt" 
                         class="object-cover w-full h-full" />
                </div>

                <!-- Descripción y controles -->
                <div class="md:w-1/3 p-6 flex flex-col">
                    <h3 class="text-xl font-bold text-[#d11a50] mb-4" x-text="'Imagen ' + (actual + 1) + ' de ' + imagenes.length"></h3>
                    <p class="text-gray-700 mb-6 flex-grow" x-text="imagenes[actual].alt"></p>

                    <!-- Navegación -->
                    <div class="flex justify-between">
                        <button @click="anterior" class="px-4 py-2 bg-[#d11a50] text-white rounded-lg hover:bg-[#b0123a] transition flex items-center">
                            <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            Anterior
                        </button>
                        <button @click="siguiente" class="px-4 py-2 bg-[#d11a50] text-white rounded-lg hover:bg-[#b0123a] transition flex items-center">
                            Siguiente
                            <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
