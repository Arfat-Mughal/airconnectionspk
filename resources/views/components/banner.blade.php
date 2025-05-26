@props([
    'backgroundImage' => null,
    'height' => 'h-[700px]',
    'overlay' => 'bg-black/50',
    'textColor' => 'text-black',
    'class' => ''
])

<div class="relative {{ $height }} w-full {{ $class }}" 
     @if($backgroundImage) style="background-image: url('{{ $backgroundImage }}'); background-size: cover; background-position: center;" @endif>
    <!-- Overlay -->
    <div class="absolute inset-0 {{ $overlay }}"></div>
    
    <!-- Content -->
    <div class="relative z-10 h-full flex items-center justify-center my-5 {{ $textColor }}">
        <div class="container px-4 text-center">
            {{ $slot }}
        </div>
    </div>
</div>
