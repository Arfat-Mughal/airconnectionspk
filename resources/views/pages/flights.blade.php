@extends('layouts.app')

@section('title', 'Fligths Page')

@section('banner')
    <x-banner backgroundImage="{{ asset('assets/background.jpg') }}">
        <h1>Lowest Air Fares &mdash; Great Discounts</h1>
        <p class="hero-text">Exclusive prices and best value for your next domestic or international trip</p>
        <livewire:counter activeTab="flights" />
    </x-banner>
@endsection

@section('content')
    <div class="container mt-5">
     <div class="row mb-5">
        <div class="col-12 text-center mb-4">
            <h2 class="display-5 fw-bold">Our Top Selling Airlines</h2>
        </div>
        
        @php
            $airlines = [
                ['code' => 'EK', 'name' => 'Emirates'],
                ['code' => 'EY', 'name' => 'Etihad Airways'],
                ['code' => 'QR', 'name' => 'Qatar Airways'],
                ['code' => 'TK', 'name' => 'Turkish Airlines'],
                ['code' => 'PK', 'name' => 'PIA'],
                ['code' => 'ER', 'name' => 'Serene Air'],
                ['code' => 'PA', 'name' => 'Airblue'],
                ['code' => 'PF', 'name' => 'Air Sial'],
                ['code' => 'TG', 'name' => 'Thai Airways'],
                ['code' => 'GF', 'name' => 'Gulf Air'],
                ['code' => 'SV', 'name' => 'Saudia'],
                ['code' => 'FZ', 'name' => 'Fly Dubai'],
                ['code' => 'BA', 'name' => 'British Airways'],
                ['code' => 'AC', 'name' => 'Air Canada'],
                ['code' => 'UL', 'name' => 'SriLankan Airlines'],
                ['code' => 'VS', 'name' => 'Virgin Atlantic'],
                ['code' => 'KU', 'name' => 'Kuwait Airways'],
                ['code' => 'WY', 'name' => 'Oman Air']
            ];
        @endphp
        
        @foreach($airlines as $airline)
        <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
            <div class="text-center h-100">
                <div class="p-3 bg-white rounded-3 shadow-sm h-100 d-flex flex-column justify-content-center">
                    <img src="{{ asset('assets/images/airlines/'.$airline['code'].'.png') }}" 
                         class="img-fluid mx-auto mb-2" 
                         style="height: 50px; width: auto; max-width: 100px;" 
                         alt="{{ $airline['name'] }}">
                    <p class="text-muted small mb-0">{{ $airline['name'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <!-- Why Book With Us -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="border rounded-3 p-4 p-md-5 bg-light">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="fw-bold mb-4">Why Book With Us</h2>
                        <p class="lead mb-4">
                            At eBooking.pk, we make flight booking easy, fast, and affordable. Whether you're planning a personal travel, a business trip, or a long-awaited vacation, we offer a wide range of flight options to suit your needs.
                        </p>
                        <a href="#" class="btn btn-primary btn-lg px-4">Talk to Customer Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Cards -->
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex align-items-start">
                        <i class="bi bi-tag-fill text-primary fs-3 me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-2">Travel Promotions & Offers</h5>
                            <p class="text-muted small mb-0">Check for travel offers, promotions and discounts from partners</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex align-items-start">
                        <i class="bi bi-passport-fill text-primary fs-3 me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-2">Need a Tourist Visa?</h5>
                            <p class="text-muted small mb-0">See our tourist and visitor visa offerings to plan your next vacation</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="col-md-4">
            <a href="#" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex align-items-start">
                        <i class="bi bi-shield-fill-check text-primary fs-3 me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-2">Get a Travel Insurance</h5>
                            <p class="text-muted small mb-0">Protect your travel from delays, baggage loss and medical emergencies</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- About Text -->
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <p class="lead">
                    Booking flights with eBooking.pk for affordable and convenient air travel. Whether you're flying with top Pakistani airlines like Pakistan International Airlines (PIA), Airblue, or SereneAir, we offer a seamless booking experience to ensure you get the best deals on domestic and international flights.
                </p>
                <p class="lead">
                    Our team of flight booking specialists is committed to assisting you every step of the way, providing 24/7 customer support to address any inquiries or concerns.
                </p>
                <p class="lead">
                    We prioritize secure transactions and transparent pricing, eliminating hidden fees and offering peace of mind. Trust us to make your flight booking process smooth and efficient, so you can focus on enjoying your journey. Start planning your trip with eBooking.pk today and take advantage of our unbeatable flight deals and dedicated service.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
