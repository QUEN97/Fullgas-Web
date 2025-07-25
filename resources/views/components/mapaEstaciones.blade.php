<div class="max-w-6xl mx-auto px-6">
    <div class="bg-white p-4 rounded-lg shadow-md">
        <div x-show="loadingLocation" class="mb-4 p-3 bg-blue-50 text-blue-800 rounded flex items-center">
            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                </circle>
                <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                </path>
            </svg>
            <span>Buscando tu ubicación para mostrar la estación más cercana...</span>
        </div>

        <div x-show="locationError" class="mb-4 p-3 bg-yellow-50 text-yellow-800 rounded">
            <p x-text="locationError"></p>
            <button @click="getUserLocation()" class="mt-2 text-blue-600 hover:underline">
                Intentar nuevamente
            </button>
        </div>

        <div class="mb-4" x-show="Alpine.store('estaciones').selected">
            <div class="flex justify-between items-start">
                <div>
                    <h3 class="text-xl font-bold text-gray-800" x-text="Alpine.store('estaciones').selected?.nombre">
                    </h3>
                    <div class="flex items-center text-[#d11a50] mt-1">
                        <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span x-text="Alpine.store('estaciones').selected?.direccion"></span>
                    </div>
                </div>
                <div x-show="Alpine.store('estaciones').selected?.distance !== undefined && Alpine.store('estaciones').selected?.distance < Infinity"
                    class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">
                    <span x-text="'Aprox. ' + Math.round(Alpine.store('estaciones').selected?.distance) + ' km'"></span>
                </div>
            </div>
            <div x-show="Alpine.store('estaciones').nearest && Alpine.store('estaciones').selected?.id === Alpine.store('estaciones').nearest.id"
                class="mt-2 text-sm text-[#d11a50] flex items-center">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Estación más cercana a tu ubicación
            </div>
        </div>

        <div class="h-96 w-full rounded-lg overflow-hidden border border-gray-200">
            <iframe x-bind:src="mapSrc" width="100%" height="100%" style="border:0;" allowfullscreen=""
                loading="lazy" class="rounded-lg">
            </iframe>
        </div>
    </div>
</div>
