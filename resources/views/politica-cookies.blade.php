<div x-data="cookieConsent()" 
     x-init="init()"
     x-show="showConsent" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="translate-y-full"
     x-transition:enter-end="translate-y-0"
     x-transition:leave="transition ease-in duration-300"
     x-transition:leave-start="translate-y-0"
     x-transition:leave-end="translate-y-full"
     class="fixed bottom-0 left-0 right-0 bg-white shadow-lg border-t border-gray-200 z-50">
    <div class="max-w-7xl mx-auto p-4 md:p-6">
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
            <!-- Texto explicativo -->
            <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">🍪 Uso de Cookies</h3>
                <p class="text-sm text-gray-600">
                    Utilizamos cookies propias y de terceros para mejorar nuestros servicios, analizar el tráfico y mostrar publicidad personalizada. 
                    Puedes gestionar tus preferencias en cualquier momento desde nuestra 
                    <a href="{{ route('politica-cookies') }}" class="text-[#d11a50] hover:underline">Política de Cookies</a>.
                </p>
            </div>
            
            <!-- Botones de acción -->
            <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                <button @click="acceptAll" 
                        class="px-4 py-2 bg-[#d11a50] text-white rounded-md font-medium hover:bg-[#b0123a] transition-colors">
                    Aceptar todas
                </button>
                <button @click="acceptNecessary" 
                        class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md font-medium hover:bg-gray-50 transition-colors">
                    Solo necesarias
                </button>
                <button @click="customize" 
                        class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md font-medium hover:bg-gray-50 transition-colors">
                    Personalizar
                </button>
            </div>
        </div>
        
        <!-- Panel de personalización (oculto inicialmente) -->
        <div x-show="showCustomize" x-transition class="mt-6 pt-6 border-t border-gray-200">
            <h4 class="font-medium text-gray-800 mb-4">Selecciona las cookies que deseas aceptar:</h4>
            
            <div class="space-y-4">
                <!-- Cookie necesarias (siempre activas) -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input type="checkbox" checked disabled class="h-4 w-4 text-[#d11a50] border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label class="font-medium text-gray-700">Cookies necesarias</label>
                        <p class="text-gray-500">Esenciales para el funcionamiento del sitio. No se pueden desactivar.</p>
                    </div>
                </div>
                
                <!-- Cookies analíticas -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input type="checkbox" x-model="preferences.analytics" class="h-4 w-4 text-[#d11a50] border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label class="font-medium text-gray-700">Cookies analíticas</label>
                        <p class="text-gray-500">Nos ayudan a entender cómo interactúan los usuarios con el sitio.</p>
                    </div>
                </div>
                
                <!-- Cookies de marketing -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input type="checkbox" x-model="preferences.marketing" class="h-4 w-4 text-[#d11a50] border-gray-300 rounded">
                    </div>
                    <div class="ml-3 text-sm">
                        <label class="font-medium text-gray-700">Cookies de marketing</label>
                        <p class="text-gray-500">Para mostrarte contenido personalizado según tus intereses.</p>
                    </div>
                </div>
                
                <!-- Botones de personalización -->
                <div class="flex justify-end gap-3 mt-6">
                    <button @click="savePreferences" 
                            class="px-4 py-2 bg-[#d11a50] text-white rounded-md font-medium hover:bg-[#b0123a] transition-colors">
                        Guardar preferencias
                    </button>
                    <button @click="showCustomize = false" 
                            class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-md font-medium hover:bg-gray-50 transition-colors">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>