<div>
    <div class="container py-4">
        <!-- Main Tabs -->
        @if(!$showContactForm)
        <div class="card shadow-sm mb-4 border-0">
            <!-- Main Tab Navigation -->
            <div class="card-header p-0 bg-light">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <button class="nav-link {{ $activeTab === 'flights' ? 'active bg-white text-primary' : 'text-dark' }}" 
                                wire:click="$set('activeTab', 'flights')">
                            <i class="bi bi-airplane-fill me-1"></i> Flights
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link {{ $activeTab === 'umrah' ? 'active bg-white text-primary' : 'text-dark' }}" 
                                wire:click="$set('activeTab', 'umrah')">
                            <i class="bi bi-moon-stars me-1"></i> Umrah
                        </button>
                    </li>
                </ul>
            </div>
            
            <div class="card-body bg-light">
                @if($activeTab === 'flights')
                <!-- Flight Sub-Tabs -->
                <ul class="nav nav-tabs mb-4">
                    <li class="nav-item">
                        <button class="nav-link {{ $tripType === 'one-way' ? 'active bg-light text-primary' : 'text-dark' }}" 
                                wire:click="$set('tripType', 'one-way')">
                            <i class="bi bi-arrow-right-circle me-1"></i> One Way
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link {{ $tripType === 'round-trip' ? 'active bg-light text-primary' : 'text-dark' }}" 
                                wire:click="$set('tripType', 'round-trip')">
                            <i class="bi bi-arrow-left-right me-1"></i> Round Trip
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link {{ $tripType === 'multi-city' ? 'active bg-light text-primary' : 'text-dark' }}" 
                                wire:click="$set('tripType', 'multi-city')">
                            <i class="bi bi-geo-alt me-1"></i> Multi City
                        </button>
                    </li>
                </ul>
                
                <!-- Class & Passengers -->
                <div class="row mb-4">
                    <div class="col-md-6 d-flex gap-3">
                        <!-- Class Selector -->
                        <div class="dropdown text-start">
                            <button class="btn btn-light dropdown-toggle border" type="button" 
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-airplane-fill me-2 text-primary"></i>{{ $flightClass }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" wire:click="$set('flightClass', 'Economy')">Economy</button></li>
                                <li><button class="dropdown-item" wire:click="$set('flightClass', 'Premium Economy')">Premium Economy</button></li>
                                <li><button class="dropdown-item" wire:click="$set('flightClass', 'Business')">Business</button></li>
                                <li><button class="dropdown-item" wire:click="$set('flightClass', 'First')">First Class</button></li>
                            </ul>
                        </div>
                        
                        <!-- Passengers Selector -->
                        <div class="dropdown text-start">
                            <button class="btn btn-light dropdown-toggle border" type="button" 
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-people-fill me-2 text-primary"></i>
                                {{ $adults }} Adult{{ $adults != 1 ? 's' : '' }}, 
                                {{ $children }} Child{{ $children != 1 ? 'ren' : '' }}, 
                                {{ $infants }} Infant{{ $infants != 1 ? 's' : '' }}
                            </button>
                            <div class="dropdown-menu p-3" style="min-width: 300px;">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-start">
                                            <span class="fw-medium">Adults</span>
                                            <small class="text-muted d-block">12+ years</small>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-primary" 
                                                    wire:click="updatePassengers('adults', 'decrement')">
                                                <i class="bi bi-dash"></i>
                                            </button>
                                            <button class="btn btn-sm disabled">{{ $adults }}</button>
                                            <button class="btn btn-sm btn-outline-primary" 
                                                    wire:click="updatePassengers('adults', 'increment')">
                                                <i class="bi bi-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-start">
                                            <span class="fw-medium">Children</span>
                                            <small class="text-muted d-block">2-11 years</small>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-primary" 
                                                    wire:click="updatePassengers('children', 'decrement')">
                                                <i class="bi bi-dash"></i>
                                            </button>
                                            <button class="btn btn-sm disabled">{{ $children }}</button>
                                            <button class="btn btn-sm btn-outline-primary" 
                                                    wire:click="updatePassengers('children', 'increment')">
                                                <i class="bi bi-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="text-start">
                                            <span class="fw-medium">Infants</span>
                                            <small class="text-muted d-block">Under 2 years</small>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-primary" 
                                                    wire:click="updatePassengers('infants', 'decrement')">
                                                <i class="bi bi-dash"></i>
                                            </button>
                                            <button class="btn btn-sm disabled">{{ $infants }}</button>
                                            <button class="btn btn-sm btn-outline-primary" 
                                                    wire:click="updatePassengers('infants', 'increment')">
                                                <i class="bi bi-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Flight Segments -->
                @foreach($segments as $index => $segment)
                <div class="row g-3 mb-3">
                    <div class="col-md-4 text-start">
                        <label class="form-label fw-medium text-primary">From</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-geo-alt text-primary"></i></span>
                            <input type="text" class="form-control border-start-0" 
                                   wire:model="segments.{{ $index }}.from" 
                                   placeholder="City or Airport">
                        </div>
                    </div>
                    <div class="col-md-4 text-start">
                        <label class="form-label fw-medium text-primary">To</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-geo-alt-fill text-primary"></i></span>
                            <input type="text" class="form-control border-start-0" 
                                   wire:model="segments.{{ $index }}.to" 
                                   placeholder="City or Airport">
                        </div>
                    </div>
                    <div class="col-md-3 text-start">
                        <label class="form-label fw-medium text-primary">Departure</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-calendar text-primary"></i></span>
                            <input type="date" class="form-control border-start-0" 
                                   wire:model="segments.{{ $index }}.departure">
                        </div>
                    </div>
                    @if($tripType === 'multi-city' && $index > 0)
                    <div class="col-md-1 d-flex align-items-end">
                        <button class="btn btn-outline-danger btn-sm" 
                                wire:click="removeSegment({{ $index }})">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                    @endif
                </div>
                @if($tripType === 'round-trip' && $index === 0)
                <div class="row g-3 mb-3">
                    <div class="col-md-4 text-start">
                        <label class="form-label fw-medium text-primary">Return</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-calendar-check text-primary"></i></span>
                            <input type="date" class="form-control border-start-0" 
                                   wire:model="segments.0.return">
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                
                @if($tripType === 'multi-city' && count($segments) < $maxSegments)
                <div class="mb-3 text-start">
                    <button class="btn btn-outline-primary" wire:click="addSegment">
                        <i class="bi bi-plus-circle me-2"></i>Add Another Flight
                    </button>
                </div>
                @endif
                
                <div class="d-grid mt-4 text-start">
                    <button class="btn btn-primary py-2" wire:click="submitFlightSearch">
                        <i class="bi bi-search me-2"></i>Search Flights
                    </button>
                </div>
                @else
                <!-- Umrah Package Form -->
                @if($umrahStep === 1)
                <div class="text-start mb-4">
                    <p class="text-muted">Please select all requirements of your Umrah Package</p>
                </div>
                
                <div class="row g-3">
                    <div class="col-md-6 text-start">
                        <label class="form-label fw-medium text-primary">Departure From</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-geo-alt text-primary"></i></span>
                            <select class="form-select border-start-0" wire:model="umrahAirport">
                                <option value="Lahore (LHE)">Lahore (LHE)</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6 text-start">
                        <label class="form-label fw-medium text-primary">Departure Date</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-calendar text-primary"></i></span>
                            <input type="date" class="form-control border-start-0" wire:model="umrahDeparture">
                        </div>
                    </div>
                    
                    <div class="col-md-6 text-start">
                        <label class="form-label fw-medium text-primary">Hotel Category</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-building text-primary"></i></span>
                            <select class="form-select border-start-0" wire:model="umrahHotelCategory">
                                <option value="Economy">Economy</option>
                                <option value="Economy Plus">Economy Plus</option>
                                <option value="3 Star">3 Star</option>
                                <option value="4 Star">4 Star</option>
                                <option value="5 Star">5 Star</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-6 text-start">
                        <label class="form-label fw-medium text-primary">Transportation</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-bus-front text-primary"></i></span>
                            <select class="form-select border-start-0" wire:model="umrahTransport">
                                <option value="Shared Bus">Shared Bus (Lowest Cost)</option>
                                <option value="Private Car">Private Car</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-start">
                        <label class="form-label fw-medium text-primary">Adults (12+ years)</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-person text-primary"></i></span>
                            <div class="btn-group w-100">
                                <button class="btn btn-outline-primary" wire:click="updateUmrahPassengers('umrahAdults', 'decrement')">
                                    <i class="bi bi-dash"></i>
                                </button>
                                <button class="btn btn-outline-primary disabled">{{ $umrahAdults }}</button>
                                <button class="btn btn-outline-primary" wire:click="updateUmrahPassengers('umrahAdults', 'increment')">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-start">
                        <label class="form-label fw-medium text-primary">Children (2-11 years)</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-person text-primary"></i></span>
                            <div class="btn-group w-100">
                                <button class="btn btn-outline-primary" wire:click="updateUmrahPassengers('umrahChildren', 'decrement')">
                                    <i class="bi bi-dash"></i>
                                </button>
                                <button class="btn btn-outline-primary disabled">{{ $umrahChildren }}</button>
                                <button class="btn btn-outline-primary" wire:click="updateUmrahPassengers('umrahChildren', 'increment')">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-start">
                        <label class="form-label fw-medium text-primary">Infants (Under 2 years)</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-person text-primary"></i></span>
                            <div class="btn-group w-100">
                                <button class="btn btn-outline-primary" wire:click="updateUmrahPassengers('umrahInfants', 'decrement')">
                                    <i class="bi bi-dash"></i>
                                </button>
                                <button class="btn btn-outline-primary disabled">{{ $umrahInfants }}</button>
                                <button class="btn btn-outline-primary" wire:click="updateUmrahPassengers('umrahInfants', 'increment')">
                                    <i class="bi bi-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 text-start">
                        <div class="d-grid">
                            <button class="btn btn-primary py-2" wire:click="goToUmrahStep2">
                                <i class="bi bi-arrow-right-circle me-2"></i>Select Night Stay
                            </button>
                        </div>
                    </div>
                </div>
                @else
                <!-- Umrah Step 2: Select Stay -->
                <div class="text-start mb-4">
                    <h2 class="fw-medium text-primary">Select Stay</h2>
                    <p class="text-muted">Select total nights of stay in Kingdom of Saudi Arabia</p>
                    <p class="mb-0"><a class="text-primary text-decoration-underline" wire:click="goToUmrahStep1"><i class="bi bi-arrow-left-circle me-2"></i>Change Basic Requirements</a></p>
                </div>
                
                <div class="row g-3">
                    <div class="col-md-9 text-start">
                        <label class="form-label fw-medium text-primary">First Stay</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-geo-alt text-primary"></i></span>
                            <select class="form-select border-start-0" wire:model="umrahFirstStay">
                                <option value="Makkah">Makkah</option>
                                <option value="Madina">Madina</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 text-start">
                        <label class="form-label fw-medium text-primary">Nights</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-moon text-primary"></i></span>
                            <select class="form-select border-start-0" wire:model="umrahFirstNights">
                                @for($i = 2; $i <= 10; $i++)
                                <option value="{{ $i }}">{{ $i }} Nights</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-9 text-start">
                        <label class="form-label fw-medium text-primary">Second Stay</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-geo-alt text-primary"></i></span>
                            <input type="text" class="form-control border-start-0" wire:model="umrahSecondStay" readonly>
                        </div>
                    </div>
                    <div class="col-md-3 text-start">
                        <label class="form-label fw-medium text-primary">Nights</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-moon text-primary"></i></span>
                            <select class="form-select border-start-0" wire:model="umrahSecondNights">
                                @for($i = 2; $i <= 10; $i++)
                                <option value="{{ $i }}">{{ $i }} Nights</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-md-9 text-start">
                        <label class="form-label fw-medium text-primary">Third Stay (Optional)</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-geo-alt text-primary"></i></span>
                            <select class="form-select border-start-0" wire:model="umrahThirdStay">
                                <option value="">None</option>
                                <option value="Makkah">Makkah</option>
                                <option value="Madina">Madina</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3 text-start">
                        <label class="form-label fw-medium text-primary">Nights</label>
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-moon text-primary"></i></span>
                            <select class="form-select border-start-0" wire:model="umrahThirdNights">
                                @for($i = 2; $i <= 10; $i++)
                                <option value="{{ $i }}">{{ $i }} Nights</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-12 text-start">
                        <div class="alert alert-info">
                            <i class="bi bi-info-circle me-2"></i>Your total stay is 
                            <strong>{{ $umrahFirstNights + $umrahSecondNights + ($umrahThirdStay ? $umrahThirdNights : 0) }}</strong> nights
                        </div>
                    </div>
                    
                    <div class="col-12 text-start">
                        <div class="d-grid">
                           <button class="btn btn-primary py-2" wire:click="submitUmrahForm">
                                <i class="bi bi-arrow-right-circle me-2"></i>Get Price
                            </button>
                        </div>
                    </div>
                </div>
                @endif
                @endif
            </div>
        </div>
        @else
        <!-- Contact Information Form -->
        <div class="card shadow-sm border-0">
            <div class="card-header bg-light">
                <h5 class="mb-0 text-dark text-start"><i class="bi bi-person-lines-fill me-2"></i>Contact Information</h5>
            </div>
            
            <div class="card-body bg-light">
                <form wire:submit.prevent="submitContactForm">
                    <div class="row g-3">
                        <div class="col-md-6 text-start">
                            <label class="form-label fw-medium text-primary">Your Name <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="bi bi-person text-primary"></i></span>
                                <input type="text" class="form-control border-start-0" wire:model="name" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6 text-start">
                            <label class="form-label fw-medium text-primary">Phone Number <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <select class="form-select bg-white" style="max-width: 120px;" wire:model="phoneCountry">
                                    <option value="+92">+92 (PK)</option>
                                    <option value="+1">+1 (US)</option>
                                    <option value="+44">+44 (UK)</option>
                                </select>
                                <span class="input-group-text bg-white"><i class="bi bi-telephone text-primary"></i></span>
                                <input type="tel" class="form-control border-start-0" wire:model="phoneNumber" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6 text-start">
                            <label class="form-label fw-medium text-primary">Email (Optional)</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="bi bi-envelope text-primary"></i></span>
                                <input type="email" class="form-control border-start-0" wire:model="email">
                            </div>
                        </div>
                        
                        <div class="col-md-6 text-start">
                            <label class="form-label fw-medium text-primary">Your City <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text bg-white"><i class="bi bi-geo-alt text-primary"></i></span>
                                <input type="text" class="form-control border-start-0" wire:model="city" required>
                            </div>
                        </div>
                        
                        <div class="col-12 text-start">
                            <label class="form-label fw-medium text-primary">Message or Comments</label>
                            <div class="input-group">
                                <span class="input-group-text bg-white align-items-start"><i class="bi bi-chat-left-text text-primary mt-2"></i></span>
                                <textarea class="form-control border-start-0" rows="4" wire:model="comments"></textarea>
                            </div>
                        </div>
                        
                        <div class="col-12 mt-4 text-start">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary py-2">
                                    <i class="bi bi-send-fill me-2"></i>Submit Booking Request
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @endif
        
        @if(session()->has('message'))
        <div class="alert alert-success mt-4 text-start">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('message') }}
        </div>
        @endif
    </div>

    @push('styles')
    <style>
    /* Updated compact styles */
    .container {
        padding-top: 1rem !important;
        padding-bottom: 1rem !important;
    }
    
    .card {
        margin-bottom: 1rem !important;
    }
    
    .nav-tabs .nav-link {
        padding: 8px 15px !important;
        font-size: 0.9rem;
    }
    
    .btn-lg {
        padding: 0.5rem 1rem !important;
        font-size: 1rem !important;
    }
    
    .form-control, .form-select, .input-group-text {
        padding: 0.375rem 0.75rem !important;
        height: auto !important;
    }
    
    .btn {
        padding: 0.375rem 0.75rem !important;
    }
    
    .dropdown-menu {
        padding: 0.5rem !important;
    }
    
    .alert {
        padding: 0.75rem !important;
    }
    
    .mb-4 {
        margin-bottom: 1rem !important;
    }
    
    .mb-3 {
        margin-bottom: 0.75rem !important;
    }
    
    /* Keep existing styles but make them more compact */
    .nav-tabs .nav-link.active {
        background-color: #ffffff;
        color: #0d6efd !important;
        border-bottom: 2px solid #0d6efd;
        font-weight: 600;
    }
    
    .nav-tabs .nav-link {
        color: #495057;
        border: none;
        border-radius: 0;
    }
    
    .nav-tabs .nav-link:hover {
        background-color: rgba(255, 255, 255, 0.3);
    }
    
    .dropdown-menu {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .form-control, .form-select {
        border-radius: 0.375rem;
    }
    
    .input-group-text {
        border-right: none;
    }
    
    .form-control.border-start-0, .form-select.border-start-0 {
        border-left: none;
    }
    
    .btn-outline-primary:hover {
        color: white;
    }
</style>
    @endpush
</div>