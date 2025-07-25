<section class="relative h-screen flex items-center justify-center bg-cover bg-fixed bg-center"
    style="background-image: url('{{ asset('images/fullgas.jpg') }}');">


    <div x-data="counterAnimation()" class="relative z-10 text-[#f4f4f5] text-center px-4 w-full">
        <!-- Contador -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div>
                <p class="text-5xl font-bold"><span x-text="stations"></span>+</p>
                <p class="text-lg">{{ __('ESTACIONES') }}</p>
            </div>
            <div>
                <p class="text-5xl font-bold"><span x-text="employees"></span>+</p>
                <p class="text-lg">{{ __('EMPLEADOS') }}</p>
            </div>
            <div>
                <p class="text-5xl font-bold"><span x-text="countries"></span>+</p>
                <p class="text-lg">{{ __('PAÍSES ESTRATÉGICOS') }}</p>
            </div>
            <div>
                <p class="text-5xl font-bold"><span x-text="years"></span>+</p>
                <p class="text-lg">{{ __('AÑOS EN EL MERCADO') }}</p>
            </div>
        </div>

        <!-- Texto y botón añadidos -->
        <div class="mt-12 max-w-4xl mx-auto px-4">
            <!-- Contenedor principal con gradiente y sombra -->
            <div
                class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-[#d11a50] to-[#b0123a] shadow-2xl p-8 md:p-12">
                <!-- Efecto de partículas decorativas -->
                <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-20">
                    <div class="absolute top-1/4 left-1/4 w-32 h-32 bg-white rounded-full blur-xl"></div>
                    <div class="absolute bottom-1/3 right-1/3 w-40 h-40 bg-white rounded-full blur-xl"></div>
                </div>

                <!-- Contenido -->
                <div class="relative z-10 text-center">
                    <!-- Título con efecto de texto brillante -->
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                        <span
                            class="inline-block bg-clip-text text-transparent bg-gradient-to-r from-yellow-200 to-white">
                            {{ __('¡HAGAMOS NEGOCIO JUNTOS!') }}
                        </span>
                        <br>
                        <span class="text-2xl md:text-3xl font-semibold text-white/90">
                            {{ __('Conoce la Licencia FullGas') }}
                        </span>
                    </h2>

                    <!-- Descripción -->
                    <p class="text-lg text-white/80 mb-8 max-w-2xl mx-auto">
                        {{ __('Descubre cómo puedes ser parte de nuestra red de estaciones y crecer junto a nosotros.') }}
                    </p>

                    <!-- Botón mejorado -->
                    <div class="flex justify-center">
                        <a href="{{ route('licencia-fullgas') }}"
                            class="relative group px-8 py-4 bg-white text-[#d11a50] rounded-full font-bold text-lg shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                            <span class="relative z-20 flex items-center gap-3">
                                {{ __('Más información') }}
                                <!-- Icono animado -->
                                <svg class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300"
                                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 5L21 12M21 12L14 19M21 12H3" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <!-- Efecto hover */ -->
                            <span
                                class="absolute inset-0 z-10 bg-white rounded-full opacity-100 group-hover:opacity-0 transition-opacity duration-500"></span>
                            <span
                                class="absolute inset-0 z-0 bg-gradient-to-r from-yellow-200 to-white rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
