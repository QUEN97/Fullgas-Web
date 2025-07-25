<div class="mb-8 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
    <div class="w-full md:w-auto">
        <label for="zona-filter" class="block text-sm font-medium text-gray-700 mb-2">Filtrar por zona:</label>
        <div class="relative">
            <select id="zona-filter" x-model="zonaSeleccionada" @change="filtrarPorZona"
                class="appearance-none block w-full md:w-72 pl-4 pr-10 py-3 rounded-lg border border-gray-300 shadow-sm focus:border-[#d11a50] focus:ring-2 focus:ring-[#d11a50] focus:ring-opacity-50 bg-white text-gray-700 transition-all duration-200">
                <option value="">Todas las zonas</option>
                <template x-for="zona in zonasUnicas" :key="zona">
                    <option x-text="zona" :value="zona"></option>
                </template>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>
    </div>

    <div x-show="userLocation" class="text-sm text-gray-600 flex items-center bg-gray-50 px-4 py-2 rounded-lg">
        <svg class="w-5 h-5 mr-2 text-[#d11a50]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        <span x-show="zonaSeleccionada">Mostrando estaciones de <span x-text="zonaSeleccionada"
                class="font-semibold text-[#d11a50]"></span> (ordenadas por cercanía)</span>
        <span x-show="!zonaSeleccionada">Mostrando todas las estaciones (ordenadas por cercanía)</span>
    </div>
</div>
