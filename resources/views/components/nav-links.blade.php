<div 
    x-data="{ active: null }" 
    x-ref="nav"
    @mouseleave="$refs.highlight.style.width = '0'"
    class="relative hidden md:flex items-center space-x-8"
>
    <div 
        x-ref="highlight" 
        class="absolute -z-10 h-10 bg-[#f4f4f5] rounded transition-all duration-300" 
        style="top: 50%; transform: translateY(-50%); width: 0"
    ></div>

    <template x-for="(item, index) in [
        { text: 'El Buen Trato', href: '{{ route('el-buen-trato') }}' },
        { text: 'Ubicaciones', href: '{{ route('ubicaciones') }}' },
        { text: 'Licencia FullGas', href: '{{ route('licencia-fullgas') }}' },
        { text: 'Vales y Tarjetas', href: '{{ route('vales-tarjetas') }}' },
        { text: 'Escudería', href: '{{ route('escuderia') }}' },
        { text: 'Contacto', href: '{{ route('contacto') }}' }
    ]" :key="index">
        <a 
            :href="item.href" 
            @mouseenter="$nextTick(() => {
                const el = $event.target;
                const rect = el.getBoundingClientRect();
                const parentRect = el.parentElement.getBoundingClientRect();
                $refs.highlight.style.left = (rect.left - parentRect.left) + 'px';
                $refs.highlight.style.width = rect.width + 'px';
            })"
            class="relative z-10 text-[#f4f4f5] font-extrabold px-2 transition-colors duration-300 hover:text-black"
            x-text="item.text"
        ></a>
    </template>
</div>