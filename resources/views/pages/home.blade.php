@extends('layouts.app')

@section('title', 'Home Page')

@section('banner')
    <x-banner backgroundImage="{{ asset('assets/2nd-banner.jpg') }}">
        <h1 class="text-white fw-bold">Your Journey Begins <span class="text-danger">—</span> At the Best Price</h1>
        <p class="hero-text text-light">Unlock premium flights at budget-friendly rates</p>
        <livewire:counter activeTab="flights" />
    </x-banner>
@endsection

@section('styles')
    <style>
        .hero-umrah {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://cdn.travelsoft.net/site/101/home/thumb.gif');
            background-size: cover;
            background-position: center;
            color: white;
            border-radius: 10px;
        }

        .product-card {
            transition: transform 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .product-price {
            font-weight: 600;
            color: #0d6efd;
            margin-bottom: 8px;
        }

        .service-card {
            height: 100%;
            border: none;
            border-radius: 10px;
            transition: all 0.3s;
            margin-bottom: 20px;
        }

        .service-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-right: 20px;
        }

        .promo-card {
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s;
            margin-bottom: 20px;
        }

        .promo-card:hover {
            transform: scale(1.03);
        }

        .section-title {
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }

        .section-spacing {
            padding: 60px 0;
        }
    </style>
@endsection

@section('content')
        <!-- Quick Services Section -->
        <section class="mb-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card service-card shadow-sm h-100">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-passport service-icon me-4"></i>
                                <div>
                                    <h5 class="card-title fw-semibold">Track My Visa</h5>
                                    <p class="card-text text-muted small">Track your tourist visa application online with
                                        realtime status updates</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card service-card shadow-sm h-100">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-patch-check service-icon me-4"></i>
                                <div>
                                    <h5 class="card-title fw-semibold">Verify Payment Receipt</h5>
                                    <p class="card-text text-muted small">Conveniently verify your payment receipt issued by
                                        any of our branch</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="text-decoration-none">
                        <div class="card service-card shadow-sm h-100">
                            <div class="card-body d-flex align-items-center">
                                <i class="bi bi-credit-card service-icon me-4"></i>
                                <div>
                                    <h5 class="card-title fw-semibold">Pay My Invoice</h5>
                                    <p class="card-text text-muted small">Pay for your purchases using your debit or credit
                                        card online</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- Umrah Hero Section -->
        <div class="container py-5">
            <div class="row align-items-center bg-light rounded-4 shadow-sm overflow-hidden">
                <div class="col-md-6 p-0">
                    <div class="ratio ratio-4x3">
                        <img src="https://cdn.travelsoft.net/site/101/home/thumb.gif" alt="Umrah Package"
                            class="w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <div class="col-md-6 p-5">
                    <h2 class="fw-bold text-dark">Best Value on Umrah Packages</h2>
                    <p class="text-muted mt-3">
                        Experience a spiritually enriching journey with our exclusive Umrah packages. Enjoy visa processing,
                        flight bookings, and premium accommodation—all tailored to your needs.
                    </p>
                    <a href="{{ route('umrah') }}" class="btn btn-primary mt-4 px-4 py-2">
                        View Umrah Packages
                    </a>
                </div>
            </div>
        </div>


        <!-- Visa Products Section -->
        <section class="mb-5">
            <x-visa-products />
            <div class="text-center mt-4">
                <a href="{{ route('visa') }}" class="btn btn-outline-primary px-4">View All <i
                        class="bi bi-arrow-right-circle ms-2"></i></a>
            </div>
        </section>

        <!-- Authorized Visa Section -->
        <section class="mb-5">
            <div class="bg-primary text-white py-5 px-3 rounded-3">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <i class="bi bi-check-circle-fill display-4 text-warning mb-3"></i>
                        <h2 class="fw-bold mb-3">Authorized Visa Dropbox for Thailand and Indonesia</h2>
                        <p class="mb-4">We are authorized visa drop-box company for Royal Thai Embassy Islamabad and
                            Embassy of the Republic of Indonesia Islamabad. Travelers can officially submit their tourist
                            visa applications through any of <a href="#"
                                class="link-warning text-decoration-none fw-semibold">our branches</a></p>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="#" class="btn btn-light text-primary fw-semibold">Thailand Visa</a>
                            <a href="#" class="btn btn-outline-light fw-semibold">Indonesia Visa</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Information Section -->
        <section class="mb-5">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h3 class="fw-bold mb-3">The best travel booking experience</h3>
                    <p class="mb-4">Discover a world of memorable travel with Air Connections.pk, your one-stop solution
                        for all
                        your travel needs. Our platform offers a comprehensive range of services to ensure your journey is
                        smooth and hassle-free. From booking flights to securing tourist visas, we cater to every aspect of
                        your travel planning. Traveling for leisure, business, or religious purposes, Air Connections.pk is
                        here to
                        assist you every step of the way.</p>

                    <h3 class="fw-bold mb-3">Best deals on air tickets</h3>
                    <p class="mb-4">At Air Connections.pk, we provide access to a wide variety of flights, both domestic
                        and
                        international. Partnering with major international airlines, including Emirates, Qatar Airways,
                        Etihad and Turkish Airlines, we offer the best deals to ensure you find the most affordable fares.
                    </p>

                    <h3 class="fw-bold mb-3">Umrah packages with best value</h3>
                    <p class="mb-4">Planning an Umrah pilgrimage? Look no further. We offer specialized services to help
                        you organize your Umrah trip. From visa processing to flight bookings and accommodation
                        arrangements, we provide comprehensive packages tailored to your needs. Our experienced team is
                        dedicated to making your religious journey as comfortable and stress-free as possible, allowing you
                        to focus on your spiritual experience.</p>

                    <h3 class="fw-bold mb-3">Get a travel insurance with exclusive discounts</h3>
                    <p class="mb-4">Travel insurance is a crucial part of any trip, and at Air Connections.pk, we offer a
                        range
                        of insurance options to protect you from unexpected events. Our travel insurance plans cover medical
                        emergencies, trip cancellations, lost luggage, and more, providing peace of mind throughout your
                        travels.</p>

                    <h3 class="fw-bold mb-3">Apply your tourist visa with ease and convenience</h3>
                    <p>Obtaining a tourist visa can be daunting, but we simplify the process for you. We offer expert
                        assistance in securing tourist visas for several Far Eastern and Middle Eastern destinations,
                        including Thailand, Malaysia, Indonesia, UAE and many other destinations. Our knowledgeable team
                        handles all the paperwork, ensuring that your visa application is accurate and complete.</p>
                </div>
            </div>
        </section>
@endsection
