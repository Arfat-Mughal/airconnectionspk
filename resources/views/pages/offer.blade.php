@extends('layouts.app')

@section('title', 'E-Services Page')

@section('banner')
    <x-banner backgroundImage="{{ asset('assets/images/backgrounds/sky.jpg') }}">
        <h1>e-Services</h1>
        <p>Take advantage of our e-services to track and verify</p>
    </x-banner>
@endsection

@section('content')
    <div class="container py-5">
    <div class="row justify-content-center g-4">
        <!-- Verify Payment Receipt -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card h-100 border-0 shadow-sm">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="{{asset('assets/images/verify_payment.jpg')}}" class="card-img-top" alt="Verify Payment Receipt">
                    <div class="card-body">
                        <p class="text-success mb-2">
                            <i class="bi bi-circle-fill text-success me-2"></i>Online
                        </p>
                        <h5 class="card-title mb-0">Verify Payment Receipt</h5>
                    </div>
                </a>
            </div>
        </div>

        <!-- Track Visa Status -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card h-100 border-0 shadow-sm">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="{{asset('assets/images/track_visa_status.jpg')}}" class="card-img-top" alt="Track Visa Status">
                    <div class="card-body">
                        <p class="text-success mb-2">
                            <i class="bi bi-circle-fill text-success me-2"></i>Online
                        </p>
                        <h5 class="card-title mb-0">Track Visa Status</h5>
                    </div>
                </a>
            </div>
        </div>

        <!-- Pay Invoice Online -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card h-100 border-0 shadow-sm">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="{{asset('assets/images/credit_card_payment.jpg')}}" class="card-img-top" alt="Pay Invoice Online">
                    <div class="card-body">
                        <p class="text-success mb-2">
                            <i class="bi bi-circle-fill text-success me-2"></i>Online
                        </p>
                        <h5 class="card-title mb-0">Pay Invoice Online</h5>
                    </div>
                </a>
            </div>
        </div>

        <!-- My Account Statement -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="card h-100 border-0 shadow-sm">
                <a href="#" class="text-decoration-none text-dark">
                    <img src="{{asset('assets/images/my_account_statement.jpg')}}" class="card-img-top" alt="My Account Statement">
                    <div class="card-body">
                        <p class="text-success mb-2">
                            <i class="bi bi-circle-fill text-success me-2"></i>Online
                        </p>
                        <h5 class="card-title mb-0">My Account Statement</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
