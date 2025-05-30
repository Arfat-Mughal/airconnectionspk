<div class="card-body bg-white">
    @if($activeTab === 'flights')
        <div class="row mb-4 align-items-center">
            <!-- Flight Sub-Tabs -->
            <div class="col-12 col-md-6 mb-3 mb-md-0">
                <div class="d-flex flex-column flex-md-row gap-2">
                    <button class="btn btn-tab {{ $tripType === 'one-way' ? 'active bg-danger text-white' : 'bg-light text-dark border border-primary' }}" 
                            wire:click="$set('tripType', 'one-way')">
                        <i class="bi bi-arrow-right-circle me-1"></i> One Way
                    </button>
                    <button class="btn btn-tab {{ $tripType === 'round-trip' ? 'active bg-danger text-white' : 'bg-light text-dark border border-primary' }}" 
                            wire:click="$set('tripType', 'round-trip')">
                        <i class="bi bi-arrow-left-right me-1"></i> Round Trip
                    </button>
                    <button class="btn btn-tab {{ $tripType === 'multi-city' ? 'active bg-danger text-white' : 'bg-light text-dark border border-primary' }}" 
                            wire:click="$set('tripType', 'multi-city')">
                        <i class="bi bi-geo-alt me-1"></i> Multi City
                    </button>
                </div>
            </div>
            
            <!-- Class & Passengers - Aligned right -->
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column flex-sm-row gap-2 justify-content-end">
                    <!-- Class Selector -->
                    <div class="dropdown w-100 w-sm-auto text-end">
                        <button class="btn btn-light dropdown-toggle border border-primary w-100 text-end d-flex justify-content-between align-items-center" 
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="ms-auto">
                                <i class="bi bi-airplane-fill me-2 text-primary"></i>{{ $flightClass }}
                            </span>
                            <i class="bi bi-chevron-down text-primary"></i>
                        </button>
                        <ul class="dropdown-menu w-100 border-primary shadow-sm text-end">
                            <li><button class="dropdown-item hover-red text-end" wire:click="$set('flightClass', 'Economy')">Economy</button></li>
                            <li><button class="dropdown-item hover-red text-end" wire:click="$set('flightClass', 'Premium Economy')">Premium Economy</button></li>
                            <li><button class="dropdown-item hover-red text-end" wire:click="$set('flightClass', 'Business')">Business</button></li>
                            <li><button class="dropdown-item hover-red text-end" wire:click="$set('flightClass', 'First')">First Class</button></li>
                        </ul>
                    </div>
                    
                    <!-- Passengers Selector -->
                    <div class="dropdown w-100 w-sm-auto text-end">
                        <button class="btn btn-light dropdown-toggle border border-primary w-100 text-end d-flex justify-content-between align-items-center" 
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="ms-auto">
                                <i class="bi bi-people-fill me-2 text-primary"></i>
                                {{ $adults }}A, {{ $children }}C, {{ $infants }}I
                            </span>
                            <i class="bi bi-chevron-down text-primary"></i>
                        </button>
                        <div class="dropdown-menu p-3 w-100 border-primary shadow-sm text-end">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-danger" 
                                                wire:click="updatePassengers('adults', 'decrement')">
                                            <i class="bi bi-dash"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light disabled">{{ $adults }}</button>
                                        <button class="btn btn-sm btn-outline-danger" 
                                                wire:click="updatePassengers('adults', 'increment')">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="text-end ms-3">
                                        <span class="fw-medium text-primary">Adults</span>
                                        <small class="text-muted d-block">12+ years</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-danger" 
                                                wire:click="updatePassengers('children', 'decrement')">
                                            <i class="bi bi-dash"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light disabled">{{ $children }}</button>
                                        <button class="btn btn-sm btn-outline-danger" 
                                                wire:click="updatePassengers('children', 'increment')">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="text-end ms-3">
                                        <span class="fw-medium text-primary">Children</span>
                                        <small class="text-muted d-block">2-11 years</small>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-danger" 
                                                wire:click="updatePassengers('infants', 'decrement')">
                                            <i class="bi bi-dash"></i>
                                        </button>
                                        <button class="btn btn-sm btn-light disabled">{{ $infants }}</button>
                                        <button class="btn btn-sm btn-outline-danger" 
                                                wire:click="updatePassengers('infants', 'increment')">
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </div>
                                    <div class="text-end ms-3">
                                        <span class="fw-medium text-primary">Infants</span>
                                        <small class="text-muted d-block">Under 2 years</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Flight Segments -->
        @foreach($segments as $index => $segment)
        <div class="flight-segment mb-3 p-3 border border-primary rounded">
            <div class="row g-2">
                <div class="col-12 col-md-6">
                    <label class="fw-medium text-primary text-start">From</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="bi bi-geo-alt text-primary"></i></span>
                        <input type="text" class="form-control" 
                               wire:model="segments.{{ $index }}.from" 
                               placeholder="City or Airport">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <label class="fw-medium text-primary text-start">To</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-geo-alt-fill text-primary"></i></span>
                        <input type="text" class="form-control border-start-0" 
                               wire:model="segments.{{ $index }}.to" 
                               placeholder="City or Airport">
                    </div>
                </div>
                <div class="col-12 col-md-8">
                    <label class="fw-medium text-primary text-start">Departure</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-calendar text-primary"></i></span>
                        <input type="date" class="form-control border-start-0" 
                               wire:model="segments.{{ $index }}.departure">
                    </div>
                </div>
                @if($tripType === 'multi-city' && $index > 0)
                <div class="col-12 col-md-4 d-flex align-items-end">
                    <button class="btn btn-outline-danger w-100" 
                            wire:click="removeSegment({{ $index }})">
                        <i class="bi bi-trash me-1"></i> Remove
                    </button>
                </div>
                @endif
            </div>
            
            @if($tripType === 'round-trip' && $index === 0)
            <div class="row g-2 mt-2">
                <div class="col-12 col-md-8">
                    <label class="fw-medium text-primary text-start">Return</label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-calendar-check text-primary"></i></span>
                        <input type="date" class="form-control border-start-0" 
                               wire:model="segments.0.return">
                    </div>
                </div>
            </div>
            @endif
        </div>
        @endforeach
        
        @if($tripType === 'multi-city' && count($segments) < $maxSegments)
        <div class="mb-3">
            <button class="btn btn-outline-primary w-100" wire:click="addSegment">
                <i class="bi bi-plus-circle me-1"></i>Add Another Flight
            </button>
        </div>
        @endif
        
        <div class="mt-4">
            <button class="btn btn-danger w-100 py-3 fw-bold shadow" wire:click="submitFlightSearch">
                <i class="bi bi-search me-2"></i>Search Flights
            </button>
        </div>
    @endif
</div>