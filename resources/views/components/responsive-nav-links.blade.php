<div x-data="{ active: null }" @mouseleave="$refs.highlight.style.width = '0'"
    class="relative px-2 pt-2 pb-3 space-y-1 sm:px-3">
    <!-- Fondo deslizante -->
    <div x-ref="highlight" class="absolute z-0 h-9 bg-[#f4f4f5] rounded transition-all duration-300"
        style="top: 0; left: 0; width: 0; transform: translateY(0)"></div>

    <template
        x-for="(item, index) in [
        { text: 'El Buen Trato', href: '{{ route('el-buen-trato') }}' },
        { text: 'Ubicaciones', href: '{{ route('ubicaciones') }}' },
        { text: 'Licencia FullGas', href: '{{ route('licencia-fullgas') }}' },
        { text: 'Vales y Tarjetas', href: '{{ route('vales-tarjetas') }}' },
         { text: 'Escudería', href: '{{ route('escuderia') }}' },
        { text: 'Contacto', href: '{{ route('contacto') }}' }
    ]"
        :key="index">
        <a :href="item.href"
            class="relative z-10 block px-3 py-2 text-neutral-700 font-extrabold transition-colors duration-300 hover:text-black"
            x-text="item.text"
            @mouseenter="$nextTick(() => {
                const el = $event.target;
                const rect = el.getBoundingClientRect();
                const parent = el.offsetParent.getBoundingClientRect();
                $refs.highlight.style.top = (rect.top - parent.top) + 'px';
                $refs.highlight.style.left = (rect.left - parent.left) + 'px';
                $refs.highlight.style.width = rect.width + 'px';
            })"></a>
    </template>
</div>
