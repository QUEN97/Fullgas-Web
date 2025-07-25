<section id="mapa"
    class="min-h-screen w-full flex flex-col lg:flex-row  justify-center p-4 lg:gap-8 relative overflow-hidden"
    x-data="{ currentMap: 'mx', showMap: window.innerWidth >= 1024 }" @resize.window="showMap = window.innerWidth >= 1024"
    style="background-image: url('{{ asset('images/fullgas-3.png') }}'); background-size: cover; background-position: center;">
    <div class="hidden lg:block absolute top-0 left-0 w-full h-full  pointer-events-none">
        <div class="absolute top-0 left-0 w-1/2 h-full "></div>
        <div class="absolute top-0 left-0 w-1/2 h-full clip-diagonal bg-square"></div>
    </div>


    <div class="order-2 lg:order-1 w-full lg:w-1/2 flex justify-center lg:self-end items-center relative">
        <div x-show="currentMap === 'mx' && showMap" class="w-full h-64 lg:h-full">
            <x-mapa class="w-full h-full object-contain" />
            <small class="text-[#f4f4f5]">*{{ __('Haz clic en el mapa para ver las ubicaciones') }}.</small>
        </div>

        <div x-show="currentMap === 'gt' && showMap" class="w-full h-64 lg:h-full">
            <x-mapa-gt class="w-full h-full object-contain" />
            <small class="text-[#f4f4f5]">*{{ __('Haz clic en el mapa para ver las ubicaciones') }}.</small>
        </div>

        <button x-show="showMap" @click="currentMap = currentMap === 'mx' ? 'gt' : 'mx'"
            class="absolute top-4 right-4 px-4 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="#f4f4f5" stroke="#f4f4f5" stroke-width="2"
                viewBox="0 0 256 256">
                <path
                    d="M224,48V152a16,16,0,0,1-16,16H99.31l10.35,10.34a8,8,0,0,1-11.32,11.32l-24-24a8,8,0,0,1,0-11.32l24-24a8,8,0,0,1,11.32,11.32L99.31,152H208V48H96v8a8,8,0,0,1-16,0V48A16,16,0,0,1,96,32H208A16,16,0,0,1,224,48ZM168,192a8,8,0,0,0-8,8v8H48V104H156.69l-10.35,10.34a8,8,0,0,0,11.32,11.32l24-24a8,8,0,0,0,0-11.32l-24-24a8,8,0,0,0-11.32,11.32L156.69,88H48a16,16,0,0,0-16,16V208a16,16,0,0,0,16,16H160a16,16,0,0,0,16-16v-8A8,8,0,0,0,168,192Z">
                </path>
            </svg>
        </button>

        <div x-data="{ tooltip: false, tooltipText: '', tooltipX: 0, tooltipY: 0 }" x-show="!showMap" class="py-4">
            <a href="{{ route('ubicaciones') }}" class="block">
                <svg class="w-32 h-32 text-red-600 mx-auto hover:text-red-700 transition-colors" fill="none"
                    @mouseover="tooltip = true; tooltipText = 'Ubicaciones'; tooltipX = $event.clientX; tooltipY = $event.clientY"
                    @mouseleave="tooltip = false" @mousemove="tooltipX = $event.clientX; tooltipY = $event.clientY"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </a>
            <div x-show="tooltip" x-transition
                class="fixed bg-[#f4f4f5] text-gray-800 px-3 py-1 rounded shadow-lg text-sm font-bold pointer-events-none z-50"
                :style="`left: ${tooltipX + 15}px; top: ${tooltipY + 15}px`" x-text="tooltipText">
            </div>
        </div>
    </div>

    <div class="order-1 lg:order-2 w-full lg:w-1/2 self-start items-start lg:text-left lg:pl-8">
        <h2 class="text-4xl lg:text-7xl font-extrabold text-[#d11a50] mb-2 lg:mb-4 z-10">
            FULLGAS GASOLINERAS
        </h2>
        <p class="text-base text-[#f4f4f5] lg:text-lg font-bold px-4 lg:px-0">
            {{ __('ES UNA EMPRESA REFERENTE, LÍDER EN HOSPITALIDAD, DESPACHANDO, DESDE HACE MÁS DE 40 AÑOS, BUEN TRATO.') }}
        </p>
        <p class="text-base text-[#f4f4f5] lg:text-lg mt-2 lg:mt-4 px-4 lg:px-0">
            {{ __(' Encuentra a FullGas en') }} <span
                class="font-bold text-[#d11a50]">{{ __('14 estados de la República Mexicana') }}</span>
            {{ __('y en Centroamérica') }}.
        </p>
    </div>
</section>
<style>
    .clip-diagonal {
        clip-path: polygon(0 0, 40% 0, 100% 100%, 0% 100%);
    }

    @media (max-width: 1023px) {
        .clip-diagonal {
            clip-path: none;
        }
    }
</style>
