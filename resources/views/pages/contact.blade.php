@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container py-5">
    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-primary">We’d Love to Hear From You</h1>
        <p class="text-muted fs-5">Reach out anytime. Our travel experts are ready to assist with all your travel plans, bookings, and questions.</p>
    </div>

    <!-- Quick Call-to-Action -->
    <div class="text-center mb-4">
        <a href="tel:+923111184185" class="text-decoration-none">
            <h2 class="fw-bold text-danger mb-1">Call Now: 0311-1184-185</h2>
        </a>
        <p class="text-muted">Available 24/7 — Let’s make your next journey hassle-free.</p>
    </div>

    <!-- Contact Methods -->
    <div class="row g-4 mb-5">
        @php
            $methods = [
                [
                    'icon' => 'whatsapp',
                    'color' => 'primary',
                    'title' => 'Chat on WhatsApp',
                    'desc' => 'Fast replies from our support team via WhatsApp.',
                    'link' => 'https://wa.me/923111184185',
                ],
                [
                    'icon' => 'telephone-fill',
                    'color' => 'danger',
                    'title' => 'Give Us a Call',
                    'desc' => 'Speak directly with a friendly travel expert.',
                    'link' => 'tel:+923111184185',
                ],
                [
                    'icon' => 'chat-dots-fill',
                    'color' => 'primary',
                    'title' => 'Quick Message',
                    'desc' => 'Submit your inquiry and receive a quick response.',
                    'link' => '#',
                ],
                [
                    'icon' => 'geo-alt-fill',
                    'color' => 'danger',
                    'title' => 'Visit Our Office',
                    'desc' => 'Stop by one of our branches — we’re happy to assist in person.',
                    'link' => '#',
                ],
            ];
        @endphp

        @foreach ($methods as $method)
            <div class="col-sm-6 col-lg-3">
                <a href="{{ $method['link'] }}" class="text-decoration-none">
                    <div class="card h-100 text-center border-0 shadow-sm transition hover-shadow">
                        <div class="card-body py-5">
                            <i class="bi bi-{{ $method['icon'] }} text-{{ $method['color'] }} fs-1 mb-3"></i>
                            <h5 class="fw-bold text-dark">{{ $method['title'] }}</h5>
                            <p class="text-muted small">{{ $method['desc'] }}</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <!-- Office Location -->
    <div class="text-center">
        <h4 class="text-muted">Head Office</h4>
        <h5 class="fw-bold mt-2 text-danger">Air Connections (Pvt) Ltd</h5>
        <p class="text-muted">123 Travel Plaza, Main Boulevard, Lahore, Pakistan</p>
    </div>
</div>

<!-- Hover & Transition CSS -->
<style>
    .hover-shadow:hover {
        box-shadow: 0 .75rem 1.5rem rgba(0,0,0,.15)!important;
        transform: translateY(-5px);
    }
    .transition {
        transition: all 0.3s ease-in-out;
    }
</style>
@endsection
