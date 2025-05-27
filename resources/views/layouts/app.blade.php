<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Air Connections')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @yield('styles')
</head>

<body class="d-flex flex-column min-vh-100">
    @include('includes.header')

    @yield('banner') {{-- Banner section (optional) --}}

    <main class="container py-4 flex-grow-1">
        @yield('content')
    </main>

    @include('includes.footer')

    @livewireScripts

<!-- WhatsApp Floating Button (Desktop Only) -->
<div class="whatsapp-float d-none d-lg-block">
    <a href="https://wa.me/9203111184185?text=I+have+a+question+related+to+your+website" target="_blank" class="whatsapp-link text-decoration-none">
        <div class="whatsapp-icon bg-success rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-whatsapp fs-3 text-white"></i>
        </div>
        <span class="whatsapp-tooltip bg-dark text-white px-3 py-2 rounded">Chat with us</span>
    </a>
</div>

<style>
    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 1000;
    }
    
    .whatsapp-icon {
        width: 60px;
        height: 60px;
        box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
        transition: all 0.3s ease;
    }
    
    .whatsapp-tooltip {
        position: absolute;
        right: 70px;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        white-space: nowrap;
    }
    
    .whatsapp-link:hover .whatsapp-icon {
        background-color: #128C7E !important;
        transform: scale(1.05);
        box-shadow: 0 6px 16px rgba(37, 211, 102, 0.4);
    }
    
    .whatsapp-link:hover .whatsapp-tooltip {
        opacity: 1;
        visibility: visible;
        right: 75px;
    }
    
    /* Pulse animation */
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }
    
    .whatsapp-icon {
        animation: pulse 2s infinite;
    }
    
    .whatsapp-link:hover .whatsapp-icon {
        animation: none;
    }
</style>
</body>

</html>