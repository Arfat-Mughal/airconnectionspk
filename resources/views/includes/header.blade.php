<nav class="navbar navbar-expand-lg shadow-sm" style="background: linear-gradient(90deg, #e3f2fd, #bbdefb);">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('main') }}">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="200" height="60" class="me-2">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
            aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link fw-medium text-dark" href="{{ route('flights') }}">FLIGHTS</a>
                    <span class="px-2 d-none d-lg-inline text-muted">|</span>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link fw-medium text-dark" href="{{ route('visa') }}">VISAS</a>
                    <span class="px-2 d-none d-lg-inline text-muted">|</span>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link fw-medium text-dark" href="{{ route('umrah') }}">UMRAH</a>
                    <span class="px-2 d-none d-lg-inline text-muted">|</span>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link fw-medium text-dark" href="{{ route('e-services') }}">E-SERVICES</a>
                    <span class="px-2 d-none d-lg-inline text-muted">|</span>
                </li>
                <li class="nav-item d-flex align-items-center">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="nav-link fw-medium text-dark">MY ACCOUNT</a>
                    @endif
                </li>
            </ul>

            <div class="d-flex align-items-center gap-2">
                @auth
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle fw-medium" type="button" id="userDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle me-1"></i> {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            {{-- <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li> --}}
                            @if (Auth::user()->isAdmin())
                                <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <span class="navbar-text d-none d-lg-inline text-dark"><i class="bi bi-telephone"></i> 03111-184-185</span>
                @endauth

                <a href="tel:+9203111184185" class="btn btn-danger fw-bold" 
                    style="--bs-btn-hover-bg: #c82333; --bs-btn-hover-border-color: #c82333; --bs-btn-color: #fff;">
                    CONTACT US
                </a>
            </div>
        </div>

        <div class="menu-mobile d-lg-none d-flex gap-2 mt-2">
            <a class="menu-icon" href="tel:+9203111184185">
                <img alt="Phone" src="{{ asset('assets/images/phone-circle.png') }}" width="30">
            </a>
            <a class="menu-icon" href="https://wa.me/9203111184185?text=I+have+a+question+related+to+your+website" target="_blank">
                <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#25D366" 
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                </svg>
            </a>
        </div>
    </div>
</nav>