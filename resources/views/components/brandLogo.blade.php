<img 
    src="{{ asset('images/logo/logo.png') }}" 
    alt="{{ $attributes->get('alt', 'logo') }}" 
    {{ $attributes->except('alt')->merge(['class' => $attributes->get('class')]) }} 
/>
