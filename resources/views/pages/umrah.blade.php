@extends('layouts.app')

@section('title', 'Umrah Page')

@section('banner')
    <x-banner backgroundImage="{{ asset('assets/2nd-banner.jpg') }}">
       <h1 class="text-white fw-bold">Sacred Journeys <span class="text-danger">&mdash;</span> From Lahore</h1>
<p class="hero-text text-light margin-bottom-20">Complete Umrah packages featuring direct flights, quality hotels, and hassle-free visa services</p> <livewire:counter activeTab="umrah" />
    </x-banner>
@endsection

@section('content')
     <!-- Umrah Packages Header -->
    <div class="container text-center content-section">
        <h2 class="section-title mb-4">Our Umrah Packages</h2>
    </div>

    <!-- Umrah Packages Cards -->
    <div class="container content-section">
        <div class="row g-4">
            @php
                $packages = [
                    [
                        'title' => 'Economy Umrah Packages',
                        'url' => 'umrah/economy.html',
                        'image' => 'https://cdn.travelsoft.net/site/101/pages/e336ec0c-d0ee-44cc-ae6f-1220d0445d48/thumb.jpg'
                    ],
                    [
                        'title' => 'Premium Umrah Packages',
                        'url' => 'umrah/premium.html',
                        'image' => 'https://cdn.travelsoft.net/site/101/pages/7cdaa5b2-7ae9-4818-b0a3-319db699885d/thumb.jpg'
                    ],
                    [
                        'title' => 'Luxury Umrah Packages',
                        'url' => 'umrah/luxury.html',
                        'image' => 'https://cdn.travelsoft.net/site/101/pages/84270ae8-b967-4a7e-a034-deb1fb9a6b2e/thumb.jpg'
                    ],
                    [
                        'title' => 'Book Makkah and Madinah Umrah Hotels',
                        'url' => 'umrah/hotels.html',
                        'image' => 'https://cdn.travelsoft.net/site/101/pages/7afe099c-6789-4928-a652-f9f2d75139f3/thumb.jpg'
                    ],
                    [
                        'title' => 'Umrah Transport Rates',
                        'url' => 'umrah/transport.html',
                        'image' => 'https://cdn.travelsoft.net/site/101/pages/68655644-530b-4493-b717-30c6dc422f2e/thumb.jpg'
                    ]
                ];
            @endphp
            @foreach($packages as $package)
                <div class="col-12 col-sm-6 col-md-4 col-lg-2-4">
                    <div class="package-card card h-100">
                        <a href="{{ $package['url'] }}" class="text-decoration-none">
                            <img src="{{ $package['image'] }}" class="card-img-top" alt="{{ $package['title'] }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $package['title'] }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container content-section mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h3 class="section-title mb-3">What is Included in our Umrah Packages</h3>
                <p class="mb-4">Our Umrah packages come with confirmed return air tickets on direct flights of Saudi Airlines, Serene Air, Airblue, and other direct options. We provide complete shared or private transport. You have the option to choose from a wide range of hotels.</p>

                <h3 class="section-title mb-3">Quick Umrah Visa Processing</h3>
                <p class="mb-4">We provide quick Umrah visa processing with all of our packages. Whether you are booking an economy package or a 5-star luxury package, our Umrah visa service is fast, efficient, and hassle-free.</p>

                <h3 class="section-title mb-3">Direct Hotel Bookings</h3>
                <p class="mb-4">We have direct hotel booking contracts with several reputed hotels in Makkah and Madinah. Therefore, you get instant hotel confirmation and are given your promised hotel room on arrival.</p>

                <h3 class="section-title mb-3">Cheap Umrah Packages in Lahore</h3>
                <p class="mb-4">Experience a spiritually enriching journey with our Umrah packages in Lahore. At Air Connections.pk, we provide a comprehensive range of services to ensure your pilgrimage is smooth and worry-free. Our packages include essential services such as visa processing, flight bookings, accommodation arrangements, and transportation.</p>
            </div>
        </div>
    </div>
@endsection
