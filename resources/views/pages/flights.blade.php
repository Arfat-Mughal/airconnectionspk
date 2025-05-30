@extends('layouts.app')

@section('title', 'Flights Page')

@section('banner')
    <x-banner backgroundImage="{{ asset('assets/2nd-banner.jpg') }}">
        <h1 class="text-white fw-bold">Lowest Air Fares <span class="text-danger">&mdash;</span> Great Discounts</h1>
        <p class="hero-text text-light">Exclusive prices and best value for your next domestic or international trip</p>
        <livewire:counter activeTab="flights" />
    </x-banner>
@endsection

@section('content')
<div class="container mt-5">
    <!-- Top Selling Airlines -->
    <div class="row mb-5">
        <div class="col-12 text-center mb-4">
            <h2 class="display-5 fw-bold text-primary">Our Top Selling Airlines</h2>
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
                    <div class="p-3 bg-white rounded-3 shadow-sm h-100 border border-light-subtle d-flex flex-column justify-content-center">
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
            <div class="border rounded-3 p-4 p-md-5 bg-light-subtle">
                <div class="row justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="fw-bold text-danger mb-4">Why Book With Us</h2>
                        <p class="lead mb-4">
                            At <strong>Air Connections.pk</strong>, we make flight booking easy, fast, and affordable. Whether you're planning personal travel, a business trip, or a long-awaited vacation, we offer a wide range of flight options to suit your needs.
                        </p>
                        <a href="#" class="btn btn-primary btn-lg px-4 shadow-sm">Talk to Customer Support</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Cards -->
    <div class="row g-4 mb-5">
        @php
            $services = [
                ['icon' => 'tag-fill', 'title' => 'Travel Promotions & Offers', 'desc' => 'Check for travel offers, promotions and discounts from partners', 'link' => '#'],
                ['icon' => 'passport-fill', 'title' => 'Need a Tourist Visa?', 'desc' => 'See our tourist and visitor visa offerings to plan your next vacation', 'link' => '#'],
                ['icon' => 'shield-fill-check', 'title' => 'Get a Travel Insurance', 'desc' => 'Protect your travel from delays, baggage loss and medical emergencies', 'link' => '#'],
            ];
        @endphp

        @foreach($services as $service)
        <div class="col-md-4">
            <a href="{{ $service['link'] }}" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0 hover-shadow transition">
                    <div class="card-body d-flex align-items-start">
                        <i class="bi bi-{{ $service['icon'] }} text-primary fs-3 me-3"></i>
                        <div>
                            <h5 class="fw-bold mb-2 text-dark">{{ $service['title'] }}</h5>
                            <p class="text-muted small mb-0">{{ $service['desc'] }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <!-- About Section -->
    <div class="row">
        <div class="col-12">
            <div class="mb-4">
                <p class="lead text-muted">
                    Booking flights with <strong>Air Connections.pk</strong> means affordable and convenient air travel. Whether you're flying with top Pakistani airlines like PIA, Airblue, or SereneAir, we ensure you get the best deals.
                </p>
                <p class="lead text-muted">
                    Our team of flight booking specialists is available 24/7 to assist with inquiries or concerns.
                </p>
                <p class="lead text-muted">
                    We value secure transactions and transparent pricing — no hidden fees. Trust us to simplify your booking experience, so you can focus on your journey.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Custom Styling for Theme -->
<style>
    .hover-shadow:hover {
        box-shadow: 0 .75rem 1.5rem rgba(0,0,0,.1) !important;
        transform: translateY(-4px);
    }
    .transition {
        transition: all 0.3s ease-in-out;
    }
    .text-primary {
        color: #0056b3 !important; /* Deep blue */
    }
    .text-danger {
        color: #dc3545 !important; /* Bootstrap red */
    }
    .bg-light-subtle {
        background-color: #f8f9fa;
    }
</style>
@endsection
