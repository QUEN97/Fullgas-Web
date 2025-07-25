@extends('layouts.app')

@section('title', 'Escudería')

@section('content')
    <x-heroTitle image="images/galeria_escuderia/sala_de_exhibicion.jpg" overlay="bg-black/25" />

    <section class="bg-[#d11a50] py-8 px-6">
        <div class="max-w-4xl grid grid-cols-1 md:grid-cols-3 gap-4 mx-auto">
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M185.33,114.21l29.14-27.42.17-.17a32,32,0,0,0-45.26-45.26c0,.06-.11.11-.17.17L141.79,70.67l-83-30.2a8,8,0,0,0-8.39,1.86l-24,24a8,8,0,0,0,1.22,12.31l63.89,42.59L76.69,136H56a8,8,0,0,0-5.65,2.34l-24,24A8,8,0,0,0,29,175.42l36.82,14.73,14.7,36.75.06.16a8,8,0,0,0,13.18,2.47l23.87-23.88A8,8,0,0,0,120,200V179.31l14.76-14.76,42.59,63.89a8,8,0,0,0,12.31,1.22l24-24a8,8,0,0,0,1.86-8.39Zm-.07,97.23-42.59-63.88A8,8,0,0,0,136.8,144c-.27,0-.53,0-.79,0a8,8,0,0,0-5.66,2.35l-24,24A8,8,0,0,0,104,176v20.69L90.93,209.76,79.43,181A8,8,0,0,0,75,176.57l-28.74-11.5L59.32,152H80a8,8,0,0,0,5.66-2.34l24-24a8,8,0,0,0-1.22-12.32L44.56,70.74l13.5-13.49,83.22,30.26a8,8,0,0,0,8.56-2L180.78,52.6A16,16,0,0,1,203.4,75.23l-32.87,30.93a8,8,0,0,0-2,8.56l30.26,83.22Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">
                        {{ __('TURISMO') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    {{ __('Durante más de 7 días los participantes descubren la belleza de la península de Yucatán, conduciendo fuera de las rutas convencionales lo que los conecta con los pequeños poblados llenos de belleza natural y la calidez de su gente') }}.
                </p>
            </div>
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M96,208a8,8,0,0,1-8,8H40a24,24,0,0,1-20.77-36l34.29-59.25L39.47,124.5A8,8,0,1,1,35.33,109l32.77-8.77a8,8,0,0,1,9.8,5.66l8.79,32.77A8,8,0,0,1,81,148.5a8.37,8.37,0,0,1-2.08.27,8,8,0,0,1-7.72-5.93l-3.8-14.15L33.11,188A8,8,0,0,0,40,200H88A8,8,0,0,1,96,208Zm140.73-28-23.14-40a8,8,0,0,0-13.84,8l23.14,40A8,8,0,0,1,216,200H147.31l10.34-10.34a8,8,0,0,0-11.31-11.32l-24,24a8,8,0,0,0,0,11.32l24,24a8,8,0,0,0,11.31-11.32L147.31,216H216a24,24,0,0,0,20.77-36ZM128,32a7.85,7.85,0,0,1,6.92,4l34.29,59.25-14.08-3.78A8,8,0,0,0,151,106.92l32.78,8.79a8.23,8.23,0,0,0,2.07.27,8,8,0,0,0,7.72-5.93l8.79-32.79a8,8,0,1,0-15.45-4.14l-3.8,14.17L148.77,28a24,24,0,0,0-41.54,0L84.07,68a8,8,0,0,0,13.85,8l23.16-40A7.85,7.85,0,0,1,128,32Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">{{ __('ECOLOGÍA') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    {{ __('Tan solo en la península de Yucatan hay más especies de aves que en todo Europa. Este contacto con la fauna , vegetación y lugares como cenotes y playas cristalinas lleva a la reflexión del equilibrio que debemos preservar') }}.
                </p>
            </div>
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M240,104H229.2L201.42,41.5A16,16,0,0,0,186.8,32H69.2a16,16,0,0,0-14.62,9.5L26.8,104H16a8,8,0,0,0,0,16h8v80a16,16,0,0,0,16,16H64a16,16,0,0,0,16-16V184h96v16a16,16,0,0,0,16,16h24a16,16,0,0,0,16-16V120h8a8,8,0,0,0,0-16ZM69.2,48H186.8l24.89,56H44.31ZM64,200H40V184H64Zm128,0V184h24v16Zm24-32H40V120H216ZM56,144a8,8,0,0,1,8-8H80a8,8,0,0,1,0,16H64A8,8,0,0,1,56,144Zm112,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H176A8,8,0,0,1,168,144Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">{{ __('SEGURIDAD VÍAL') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    {{ __('FullGas ha desarrollado la aplicación BeeSafe que premia a los conductores al no utilizar su celular mientras conducen') }}.
                </p>
            </div>
        </div>
    </section>

    <section class="relative bg-black w-full min-h-screen overflow-hidden">
        <!-- Fondo de video -->
        <div class="absolute inset-0 z-0">
            <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-40">
                <source src="{{ asset('images/galeria_escuderia/sala_exhibicion.mp4') }}" type="video/mp4">
                Tu navegador no soporta video HTML5.
            </video>
        </div>

        <!-- Contenido superpuesto -->
        <div
            class="relative z-10 container mx-auto px-6 py-20 lg:py-32 flex flex-col lg:flex-row items-center justify-between min-h-screen">
            <!-- Texto y QR (izquierda) -->
            <div class="w-full lg:w-1/2 text-center lg:text-left mb-16 lg:mb-0 lg:pr-12">
                <h2 class="text-5xl lg:text-7xl font-bold text-white mb-8 leading-tight">
                    <span class="text-[#d11a50]">VIVE LA EXPERIENCIA</span><br>
                    SCUDERIA FULLGAS
                </h2>

                <div class="inline-block bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <p class="text-white text-xl mb-6 font-medium max-w-lg mx-auto lg:mx-0">
                        Escanea el código y reserva tu visita a nuestro exclusivo showroom
                    </p>

                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-6">
                        <img src="{{ asset('images/galeria_escuderia/qrcode_form.png') }}" alt="Código QR para reservación"
                            class="w-40 h-40 object-contain hover:scale-105 transition-transform duration-300">

                        <div class="text-left text-white">
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 mr-2 text-[#d11a50]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="font-semibold">Lunes a Viernes<br>14:00 - 18:00 hrs</p>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 mr-2 text-[#d11a50]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p>C. 25 750, Itzimná<br>97100 Mérida, Yuc.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Video destacado (derecha) -->
            <div class="w-full lg:w-1/2 relative">
                <div
                    class="relative rounded-2xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition duration-500 border-4 border-[#d11a50]">
                    <video autoplay muted loop playsinline class="w-full h-auto max-h-[70vh] object-cover">
                        <source src="{{ asset('images/galeria_escuderia/sala_exhibicion.mp4') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="p-2 bg-black/50 rounded-full animate-pulse">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <p class="text-center text-white/80 mt-4 text-sm">Recorrido virtual por nuestra sala de exhibición</p>
            </div>
        </div>

        <!-- Efecto de luces -->
        <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-[#d11a50] rounded-full filter blur-[100px] opacity-10"></div>
            <div class="absolute bottom-1/3 right-1/3 w-96 h-96 bg-[#d11a50] rounded-full filter blur-[150px] opacity-5">
            </div>
        </div>
    </section>

    <section x-data="galeriaEscuderia()" class="py-12 px-4 bg-[#f4f4f5]">
        <div class="max-w-7xl mx-auto">
            <!-- Título de la sección -->
            <h2 class="text-3xl font-bold text-center text-[#d11a50] mb-12">Escudería FullGas - Autos Clásicos</h2>

            <!-- Grid tipo Bento mejorado -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Imagen destacada (2x2) -->
                <button @click="abrirModal(0)"
                    class="group overflow-hidden rounded-xl shadow-lg row-span-2 col-span-2 relative transform hover:scale-[1.02] transition cursor-pointer">
                    <img :src="imagenes[0].src" :alt="imagenes[0].alt" class="object-cover h-full w-full" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <p class="text-white font-medium text-lg" x-text="imagenes[0].alt"></p>
                    </div>
                </button>

                <!-- Imágenes pequeñas -->
                <template x-for="(img, index) in imagenes.slice(1, 5)" :key="index">
                    <button @click="abrirModal(index + 1)"
                        class="group overflow-hidden rounded-xl shadow-lg aspect-[4/3] relative transform hover:scale-[1.02] transition cursor-pointer">
                        <img :src="img.src" :alt="img.alt" class="object-cover h-full w-full" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-3">
                            <p class="text-white font-medium text-sm line-clamp-2" x-text="img.alt"></p>
                        </div>
                    </button>
                </template>

                <!-- Imagen vertical -->
                <button @click="abrirModal(5)"
                    class="group overflow-hidden rounded-xl shadow-lg row-span-2 col-span-1 relative transform hover:scale-[1.02] transition cursor-pointer">
                    <img :src="imagenes[5].src" :alt="imagenes[5].alt" class="object-cover h-full w-full" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <p class="text-white font-medium text-sm line-clamp-3" x-text="imagenes[5].alt"></p>
                    </div>
                </button>

                <!-- Resto de imágenes -->
                <template x-for="(img, index) in imagenes.slice(6)" :key="index">
                    <button @click="abrirModal(index + 6)"
                        class="group overflow-hidden rounded-xl shadow-lg aspect-[4/3] relative transform hover:scale-[1.02] transition cursor-pointer">
                        <img :src="img.src" :alt="img.alt" class="object-cover h-full w-full" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-3">
                            <p class="text-white font-medium text-sm line-clamp-2" x-text="img.alt"></p>
                        </div>
                    </button>
                </template>
            </div>
        </div>

        <!-- Modal -->
        <div x-show="modalAbierto" @click.away="cerrarModal"
            class="fixed inset-0 z-50 bg-black/75 flex items-center justify-center p-4">
            <div class="relative max-w-6xl w-full max-h-[90vh]">
                <!-- Botón cerrar -->
                <button @click="cerrarModal" class="absolute -top-10 right-0 text-white hover:text-[#d11a50] transition">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Contenido del modal -->
                <div class="bg-white rounded-xl overflow-hidden shadow-2xl flex flex-col md:flex-row h-full">
                    <!-- Imagen -->
                    <div class="md:w-2/3 h-64 md:h-auto bg-black flex items-center justify-center">
                        <img :src="imagenes[actual].src" :alt="imagenes[actual].alt"
                            class="object-contain w-full h-full max-h-[70vh]" />
                    </div>

                    <!-- Descripción y controles -->
                    <div class="md:w-1/3 p-6 flex flex-col">
                        <div class="flex-grow">
                            <h3 class="text-xl font-bold text-[#d11a50] mb-2"
                                x-text="'Auto Clásico ' + (actual + 1) + ' de ' + imagenes.length"></h3>
                            <p class="text-gray-700 mb-4" x-text="imagenes[actual].alt"></p>
                        </div>

                        <!-- Navegación -->
                        <div class="flex justify-between mt-4">
                            <button @click="anterior"
                                class="px-4 py-2 bg-[#d11a50] text-white rounded-lg hover:bg-[#b0123a] transition flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 19l-7-7 7-7" />
                                </svg>
                                Anterior
                            </button>
                            <button @click="siguiente"
                                class="px-4 py-2 bg-[#d11a50] text-white rounded-lg hover:bg-[#b0123a] transition flex items-center">
                                Siguiente
                                <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
