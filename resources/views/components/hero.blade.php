<section id="inicio" class="relative h-screen w-full overflow-hidden " aria-label="Sección de bienvenida FullGas">
    <x-video-hero />
    <div class="absolute inset-0 bg-[rgba(0,0,0,0.45)] pointer-events-none"></div>
    <div class="absolute inset-0 flex flex-col justify-center h-full w-full max-w-screen-xl mx-auto">
        <div class="p-4">
            <div class="flex flex-col text-left md:text-left gap-y-3 md:gap-y-2 text-[#f4f4f5] ">
                <h1 class="text-[clamp(2.5rem,5vw,6rem)] font-extrabold leading-tight text-balance">
                    {{ __('LÍDERES') }}
                </h1>
                <p
                    class="text-[clamp(2.5rem,5vw,6rem)] font-extrabold leading-tight text-balance text-[#d11a50]">
                    {{ __('DEL LIBRE MERCADO') }}
                </p>
                <p class="text-[clamp(2.5rem,5vw,6rem)] font-extrabold leading-tight text-balance">
                    {{ __('DE COMBUSTIBLE') }}
                </p>
            </div>
        </div>
        <x-links-hero />
    </div>
</section>
