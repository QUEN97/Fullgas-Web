<template x-for="(estacion, index) in estacionesVisibles" :key="index">
    <div class="grid md:grid-cols-3 gap-6 mb-8 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 border border-gray-100 relative overflow-hidden"
        :class="{
            'border-[#d11a50]': Alpine.store('estaciones').selected && Alpine.store('estaciones').selected
                .id === estacion.id
        }">

        <!-- SVG en esquina inferior derecha -->
        <div class="absolute bottom-0 right-0 w-32 h-32 opacity-20 hover:opacity-40 transition-opacity duration-300">
            <!-- SVG para ciudad -->
            <x-icons.city />

            <!-- SVG para playa -->
            <x-icons.beach />

            <!-- SVG para pueblo -->
            <x-icons.town />
        </div>

        <!-- Columna de imagen -->
        <div class="md:col-span-1">
            <div class="h-full bg-gray-100 rounded-lg overflow-hidden flex items-center justify-center">
                <img x-bind:src="estacion.imagen || 'images/logo/logo.png'" x-bind:alt="'Estación ' + estacion.nombre"
                    class="w-full h-full object-contain transition-transform duration-300 hover:scale-105">
            </div>
        </div>

        <!-- Columna de información -->
        <div class="md:col-span-2">
            <!-- Encabezado -->
            <div class="flex justify-between items-start mb-3">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-1" x-text="estacion.nombre"></h3>
                    <div class="flex items-center space-x-3">
                        <span class="text-sm bg-gray-100 text-gray-600 px-2 py-1 rounded"
                            x-text="'Estación #' + estacion.num_estacion"></span>
                        <span class="text-sm bg-gray-100 text-gray-600 px-2 py-1 rounded"
                            x-text="'Zona: ' + estacion.zona"></span>
                    </div>
                </div>
                <div x-show="estacion.distance !== undefined && estacion.distance !== Infinity"
                    class="bg-[#d11a50]/10 text-[#d11a50] px-3 py-1 rounded-full text-sm flex items-center">
                    <x-icons.distance />
                    <span x-text="Math.round(estacion.distance) + ' km'"></span>
                </div>
            </div>

            <!-- Dirección -->
            <div class="flex items-start text-gray-700 mb-4" x-show="estacion.direccion">
                <x-icons.pin-map />
                <span x-text="estacion.direccion" class="text-gray-600"></span>
            </div>

            <!-- Combustibles -->
            <div class="mb-5">
                <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                    <x-icons.pump-gas />
                    {{__('Combustibles disponibles:')}}
                </h4>
                <div class="flex flex-wrap gap-2">
                    <template x-for="(disponible, combustible) in estacion.combustibles" :key="combustible">
                        <span x-show="disponible"
                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium"
                            :class="{
                                'bg-green-100 text-green-800': combustible === 'MAGNA',
                                'bg-red-100 text-red-800': combustible === 'PREMIUM',
                                'bg-gray-800 text-white': combustible === 'DIESEL'
                            }">
                            <x-icons.check2 />
                            <span x-text="combustible"></span>
                        </span>
                    </template>
                </div>
            </div>

            <!-- Botón Ver en Mapa -->
            <button @click="mostrarMapa(estacion)"
                class="inline-flex items-center bg-[#d11a50] text-white px-6 py-3 rounded-lg font-medium hover:bg-[#b0123a] transition-all duration-300 shadow hover:shadow-md">
                <x-icons.pin-map />
                Ver en mapa
            </button>
        </div>
    </div>
</template>
