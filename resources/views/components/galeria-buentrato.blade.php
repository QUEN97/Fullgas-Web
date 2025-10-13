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
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <p class="text-white font-medium text-lg" x-text="imagenes[0].alt"></p>
                    </div>
                </button>

                <!-- Imagenes pequeñas -->
                <template x-for="(img, index) in imagenes.slice(1, 5)" :key="index">
                    <button @click="abrirModal(index + 1)"
                        class="group overflow-hidden rounded-xl shadow-lg aspect-square relative transform hover:scale-[1.02] transition cursor-pointer">
                        <img :src="img.src" :alt="img.alt" class="object-cover h-full w-full" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-3">
                            <p class="text-white font-medium text-sm" x-text="img.alt"></p>
                        </div>
                    </button>
                </template>

                <!-- Imagen vertical -->
                <button @click="abrirModal(5)"
                    class="group overflow-hidden rounded-xl shadow-lg row-span-2 col-span-1 relative transform hover:scale-[1.02] transition cursor-pointer">
                    <img :src="imagenes[5].src" :alt="imagenes[5].alt" class="object-cover h-full w-full" />
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-4">
                        <p class="text-white font-medium text-lg" x-text="imagenes[5].alt"></p>
                    </div>
                </button>

                <!-- Últimas dos imágenes -->
                <template x-for="(img, index) in imagenes.slice(6)" :key="index">
                    <button @click="abrirModal(index + 6)"
                        class="group overflow-hidden rounded-xl shadow-lg aspect-square relative transform hover:scale-[1.02] transition cursor-pointer">
                        <img :src="img.src" :alt="img.alt" class="object-cover h-full w-full" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-3">
                            <p class="text-white font-medium text-sm" x-text="img.alt"></p>
                        </div>
                    </button>
                </template>
            </div>
        </div>

        <!-- Modal -->
        <div x-show="modalAbierto" @click.away="cerrarModal"
            class="fixed inset-0 z-50 bg-black/75 flex items-center justify-center p-4">
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
                        <img :src="imagenes[actual].src" :alt="imagenes[actual].alt" class="object-cover w-full h-full" />
                    </div>

                    <!-- Descripción y controles -->
                    <div class="md:w-1/3 p-6 flex flex-col">
                        <h3 class="text-xl font-bold text-[#d11a50] mb-4"
                            x-text="'Imagen ' + (actual + 1) + ' de ' + imagenes.length"></h3>
                        <p class="text-gray-700 mb-6 flex-grow" x-text="imagenes[actual].alt"></p>

                        <!-- Navegación -->
                        <div class="flex justify-between">
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