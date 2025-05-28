@extends('layouts.app')

@section('title', 'Visa Page')

@section('banner')
    <x-banner backgroundImage="{{ asset('assets/background.jpg') }}">
        <h1>Apply a Tourist Visa</h1>
        <p class="hero-text">Take advantage of our tourist visa processing services to get your visa with ease</p>
    </x-banner>
@endsection

@section('content')
    <x-visa-products heading="Offered Visas" />

   <div class="container py-4">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">Tourist Visa Services</h2>
        <p class="lead">Fast, reliable visa processing for selected destinations</p>
    </div>

    <div class="card shadow-sm mb-4 p-3">
        <p>We specialize in tourist visa processing, ensuring your documents are complete and applications submitted accurately.</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <div class="card h-100 border-primary">
                <div class="card-body">
                    <h4 class="fw-bold text-primary">Visa Categories</h4>
                    <p>Tourist visas only (no employment or consultancy visas)</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 border-success">
                <div class="card-body">
                    <h4 class="fw-bold text-success">Specializations</h4>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-check text-success me-2"></i> Thailand</li>
                        <li><i class="bi bi-check text-success me-2"></i> Indonesia</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Thailand Visa</h5>
                </div>
                <div class="card-body">
                    <p>Authorized drop-box service for convenient Thailand visa applications.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Indonesia Visa</h5>
                </div>
                <div class="card-body">
                    <p>Official drop-box service for Indonesia visa applications in Pakistan.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="text-center mt-4">
        <a href="#" class="btn btn-primary">Apply Now</a>
    </div> --}}
</div>
@endsection
