@props([
    'image' => '',
    'title' => '',
    'paragraph' => '',
    'subparagraph' => '',
    'overlay' => 'bg-black/50',
])

<section class="relative overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset($image) }}" class="w-full h-full object-cover" loading="lazy">
        <div class="absolute inset-0 {{ $overlay }}"></div>
    </div>

    <div class="container mx-auto px-6 py-20 min-h-[320px] relative z-10 text-center mt-16 flex flex-col justify-center">
        @if ($title)
            <h1 class="text-[clamp(3rem,6vw,8rem)] font-bold mb-6 text-[#f4f4f5]">
                {{ __($title) }}
            </h1>
        @endif

        @if ($paragraph)
            <p class="text-4xl md:text-5xl max-w-2xl font-extrabold mx-auto text-[#d11a50]">
                {{ __($paragraph) }}
            </p>
        @endif

        @if ($subparagraph)
            <p class="text-xl md:text-2xl max-w-2xl font-bold mx-auto text-[#f4f4f5]">
                {{ __($subparagraph) }}
            </p>
        @endif
    </div>
</section>
