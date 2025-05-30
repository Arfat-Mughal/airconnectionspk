<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2">
    <div class="container">
        <!-- Brand/Logo -->
        <a class="navbar-brand" href="{{ route('main') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="180" height="50" class="d-inline-block align-top">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas">
            <i class="bi bi-list fs-1 text-danger"></i>
        </button>

        <!-- Desktop Navigation -->
        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-end">
            <ul class="navbar-nav gap-4 align-items-center">
                @foreach (['flights' => 'FLIGHTS', 'visa' => 'VISAS', 'umrah' => 'UMRAH'] as $route => $label)
                    <li class="nav-item position-relative">
                        <a class="nav-link fw-semibold text-dark px-2 py-1 hover-underline" href="{{ route($route) }}">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <!-- Right Side Actions -->
            <div class="d-flex align-items-center gap-3 ms-4">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-light rounded-pill px-3 dropdown-toggle d-flex align-items-center gap-2" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle fs-5 text-danger"></i>
                            <span class="d-none d-lg-inline">{{ Auth::user()->name }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                            @if (Auth::user()->isAdmin())
                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill px-4">
                        <i class="bi bi-person-fill me-1"></i> Login
                    </a>
                @endauth

                <a href="{{ route('contact') }}" class="btn btn-danger rounded-pill px-4 fw-semibold shadow-sm">
                    CONTACT US
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Offcanvas -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title fw-semibold text-danger" id="navbarOffcanvasLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav gap-2">
            @foreach (['flights' => 'FLIGHTS', 'visa' => 'VISAS', 'umrah' => 'UMRAH'] as $route => $label)
                <li class="nav-item">
                    <a class="nav-link fw-semibold py-2 text-dark" href="{{ route($route) }}">{{ $label }}</a>
                </li>
            @endforeach

            @guest
                <li class="nav-item">
                    <a class="nav-link fw-semibold py-2 text-primary" href="{{ route('login') }}">Login</a>
                </li>
            @endguest
        </ul>

        <div class="mt-4">
            <div class="d-flex gap-2 mb-3">
                <a href="tel:+9203111184185" class="btn btn-outline-primary w-50 d-flex align-items-center justify-content-center gap-2">
                    <i class="bi bi-telephone"></i> Call Us
                </a>
                <a href="https://wa.me/9203111184185" target="_blank" class="btn btn-outline-danger w-50 d-flex align-items-center justify-content-center gap-2">
                    <i class="bi bi-whatsapp"></i> WhatsApp
                </a>
            </div>
            <a href="{{ route('contact') }}" class="btn btn-danger w-100 fw-semibold rounded-pill">
                CONTACT US
            </a>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
    .hover-underline {
        position: relative;
        text-decoration: none;
    }

    .hover-underline::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0%;
        height: 2px;
        background-color: #dc3545; /* Red color */
        transition: 0.3s ease;
        transform: translateX(-50%);
    }

    .hover-underline:hover::after {
        width: 100%;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    .btn-outline-primary {
        color: #0d6efd;
        border-color: #0d6efd;
    }

    .btn-outline-primary:hover {
        color: white;
        background-color: #0d6efd;
    }

    .text-danger {
        color: #dc3545 !important;
    }

    .text-primary {
        color: #0d6efd !important;
    }
</style>