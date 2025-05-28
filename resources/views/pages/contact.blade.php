@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container py-5">
    <!-- Contact Header -->
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold mb-3">Contact Us</h1>
        <p class="lead text-muted">Get in touch with our team of expert travel consultants to make your travel arrangements</p>
    </div>

    <!-- Phone Number -->
    <div class="text-center mb-5">
        <a href="tel:+923111184185" class="text-decoration-none">
            <p class="display-6 fw-bold text-primary">0311-1184-185</p>
        </a>
    </div>

    <!-- Contact Cards -->
    <div class="row g-4 mb-5">
        <!-- WhatsApp -->
        <div class="col-md-6 col-lg-3">
            <a href="https://wa.me/923111184185" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                    <div class="card-body d-flex align-items-center p-4">
                        <i class="bi bi-whatsapp text-success fs-2 me-4"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Start WhatsApp Chat</h5>
                            <p class="text-muted small mb-0">Get in touch with our customer support team</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Call Us -->
        <div class="col-md-6 col-lg-3">
            <a href="tel:+923111184185" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                    <div class="card-body d-flex align-items-center p-4">
                        <i class="bi bi-telephone text-primary fs-2 me-4"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Call Us</h5>
                            <p class="text-muted small mb-0">For inquiries or bookings, please call us</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Instant Response -->
        <div class="col-md-6 col-lg-3">
            <a href="#" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                    <div class="card-body d-flex align-items-center p-4">
                        <i class="bi bi-chat-left-dots text-success fs-2 me-4"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Get Instant Response</h5>
                            <p class="text-muted small mb-0">Submit your requirements and we will get back to you</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <!-- Visit Us -->
        <div class="col-md-6 col-lg-3">
            <a href="#" class="text-decoration-none">
                <div class="card h-100 border-0 shadow-sm hover-shadow transition">
                    <div class="card-body d-flex align-items-center p-4">
                        <i class="bi bi-geo-alt text-primary fs-2 me-4"></i>
                        <div>
                            <h5 class="fw-bold mb-1">Visit Us</h5>
                            <p class="text-muted small mb-0">Visit our sales offices for your travel bookings</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Head Office -->
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <h2 class="h4 text-muted fw-light mb-4">Head Office</h2>
            <h3 class="h5 fw-semibold mb-3">Air connections (Pvt) Ltd</h3>
            <p class="mb-4">123 Travel Plaza, Main Boulevard, Lahore, Pakistan</p>
            <a href="#" class="btn btn-outline-primary">View Our Branches</a>
        </div>
    </div>
</div>

<!-- Optional: Add this CSS for hover effect -->
<style>
    .hover-shadow:hover {
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
    }
    .transition {
        transition: all 0.3s ease;
    }
</style>
@endsection
