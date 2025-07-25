<footer class="bg-[#0e0e0e] py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            <div class="flex flex-col space-y-4">
                <h2 class="text-2xl font-bold text-[#f4f4f5]">Fullgas Gasolineras</h2>
                <p class="text-[#f4f4f5] text-sm leading-relaxed">
                    {{__('Somos una empresa comprometida con ofrecer combustibles de alta calidad y un servicio excepcional a nuestros clientes. Nos esforzamos por garantizar el mejor rendimiento y seguridad en cada abastecimiento, siempre a precios competitivos. Nuestro compromiso es brindar una experiencia confiable y eficiente, asegurando que cada viaje cuente con el respaldo de productos de primera calidad.')}}.
                </p>

                <div class="flex space-x-4 mt-2">
                    <a href="https://www.facebook.com/FullGasMex/?locale=es_LA" target="_blank"
                        class="text-[#f4f4f5] hover:text-[#d11a50] transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-[#f4f4f5]">{{__('Contacto')}}</h3>
                <ul class="space-y-2 text-[#f4f4f5]">
                    <li class="flex items-start">
                        <svg class="h-5 w-5 flex-shrink-0 text-[#d11a50] mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        facturacion@fullgas.com.mx
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 flex-shrink-0 text-[#d11a50] mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        ventas@fullgas.com.mx
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 flex-shrink-0 text-[#d11a50] mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        (01) 800 999 0367
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 flex-shrink-0 text-[#d11a50] mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        C. 25 por 14, Col. México, México, 97125 Mérida, Yuc.
                    </li>
                    <li class="flex items-start">
                        <svg class="h-5 w-5 flex-shrink-0 text-[#d11a50] mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        {{__('Lunes a Viernes:')}} 9:00 AM - 6:00 PM
                    </li>
                </ul>
            </div>

            <div class="flex flex-col items-center md:items-start">
                <x-brandLogo class="w-auto"/>
            </div>
        </div>

        <div class="border-t border-gray-300 mt-12 pt-6 text-center md:text-left">
            <p class="text-[#f4f4f5] text-sm">
                &copy; {{ date('Y') }} <span class="text-[#d11a50] font-medium">FullGas Gasolineras.</span> {{__('Todos
                los derechos reservados')}}. 
                <a href="https://drive.google.com/file/d/1MG6zssi6BlWqlE3bekLEVnmJWIxsnhIW/view" target="_blank"> {{__('Aviso de Privacidad')}}.</a>
            </p>
        </div>
    </div>
</footer>
