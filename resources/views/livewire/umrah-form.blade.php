<div class="card-body bg-white">
    @if($activeTab === 'umrah')
        @if($umrahStep === 1)
        <!-- Step 1: Basic Requirements -->
        <div class="mb-4">
                <p class="text-muted">Please select all requirements for your Umrah Package</p>
        </div>
        
        <div class="row g-3">
            <div class="col-12 col-md-6">
                <label class="form-label fw-medium text-primary">Departure From</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-geo-alt text-primary"></i></span>
                    <select class="form-select border-start-0" wire:model="umrahAirport">
                        <option value="Lahore (LHE)">Lahore (LHE)</option>
                    </select>
                </div>
            </div>
            
            <div class="col-12 col-md-6">
                <label class="form-label fw-medium text-primary">Departure Date</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-calendar text-primary"></i></span>
                    <input type="date" class="form-control border-start-0" wire:model="umrahDeparture">
                </div>
            </div>
            
            <div class="col-12 col-md-6">
                <label class="form-label fw-medium text-primary">Hotel Category</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-building text-primary"></i></span>
                    <select class="form-select border-start-0" wire:model="umrahHotelCategory">
                        <option value="Economy">Economy</option>
                        <option value="Economy Plus">Economy Plus</option>
                        <option value="3 Star">3 Star</option>
                        <option value="4 Star">4 Star</option>
                        <option value="5 Star">5 Star</option>
                    </select>
                </div>
            </div>
            
            <div class="col-12 col-md-6">
                <label class="form-label fw-medium text-primary">Transportation</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-bus-front text-primary"></i></span>
                    <select class="form-select border-start-0" wire:model="umrahTransport">
                        <option value="Shared Bus">Shared Bus (Lowest Cost)</option>
                        <option value="Private Car">Private Car</option>
                    </select>
                </div>
            </div>
            
            <div class="col-12 col-md-4">
                <label class="form-label fw-medium text-primary">Adults (12+ years)</label>
                <div class="input-group">
                    <span class="input-group-text bg-white"><i class="bi bi-person text-primary"></i></span>
                    <div class="btn-group w-100">
                        <button class="btn btn-outline-danger" wire:click="updateUmrahPassengers('umrahAdults', 'decrement')">
                            <i class="bi bi-dash"></i>
                        </button>
                        <button class="btn btn-light disabled">{{ $umrahAdults }}</button>
                        <button class="btn btn-outline-danger" wire:click="updateUmrahPassengers('umrahAdults', 'increment')">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4">
                <label class="form-label fw-medium text-primary">Children (2-11 years)</label>
                <div class="input-group">
                    <span class="input-group-text bg-white"><i class="bi bi-person text-primary"></i></span>
                    <div class="btn-group w-100">
                        <button class="btn btn-outline-danger" wire:click="updateUmrahPassengers('umrahChildren', 'decrement')">
                            <i class="bi bi-dash"></i>
                        </button>
                        <button class="btn btn-light disabled">{{ $umrahChildren }}</button>
                        <button class="btn btn-outline-danger" wire:click="updateUmrahPassengers('umrahChildren', 'increment')">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-4">
                <label class="form-label fw-medium text-primary">Infants (Under 2 years)</label>
                <div class="input-group">
                    <span class="input-group-text bg-white"><i class="bi bi-person text-primary"></i></span>
                    <div class="btn-group w-100">
                        <button class="btn btn-outline-danger" wire:click="updateUmrahPassengers('umrahInfants', 'decrement')">
                            <i class="bi bi-dash"></i>
                        </button>
                        <button class="btn btn-light disabled">{{ $umrahInfants }}</button>
                        <button class="btn btn-outline-danger" wire:click="updateUmrahPassengers('umrahInfants', 'increment')">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="col-12 mt-4">
                <button class="btn btn-danger w-100 py-3 fw-bold shadow" wire:click="goToUmrahStep2">
                    <i class="bi bi-arrow-right-circle me-2"></i>Select Night Stay
                </button>
            </div>
        </div>
        @else
        <!-- Step 2: Select Stay -->
        <div class="mb-4">
            <h2 class="fw-medium text-primary">Select Your Stay</h2>
            <p class="text-muted">Select total nights of stay in Kingdom of Saudi Arabia</p>
            <p class="mb-0"><a class="text-primary text-decoration-underline" wire:click="goToUmrahStep1"><i class="bi bi-arrow-left-circle me-2"></i>Change Basic Requirements</a></p>
        </div>
        
        <div class="row g-3">
            <!-- First Stay -->
            <div class="col-12 col-md-9">
                <label class="form-label fw-medium text-primary">First Stay</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-geo-alt text-primary"></i></span>
                    <select class="form-select border-start-0" wire:model="umrahFirstStay">
                        <option value="Makkah">Makkah</option>
                        <option value="Madina">Madina</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <label class="form-label fw-medium text-primary">Nights</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-moon text-primary"></i></span>
                    <select class="form-select border-start-0" wire:model="umrahFirstNights">
                        @for($i = 2; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }} Nights</option>
                        @endfor
                    </select>
                </div>
            </div>
            
            <!-- Second Stay -->
            <div class="col-12 col-md-9">
                <label class="form-label fw-medium text-primary">Second Stay</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-geo-alt text-primary"></i></span>
                    <input type="text" class="form-control border-start-0" wire:model="umrahSecondStay" readonly>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <label class="form-label fw-medium text-primary">Nights</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-moon text-primary"></i></span>
                    <select class="form-select border-start-0" wire:model="umrahSecondNights">
                        @for($i = 2; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }} Nights</option>
                        @endfor
                    </select>
                </div>
            </div>
            
            <!-- Third Stay (Optional) -->
            <div class="col-12 col-md-9">
                <label class="form-label fw-medium text-primary">Third Stay (Optional)</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-geo-alt text-primary"></i></span>
                    <select class="form-select border-start-0" wire:model="umrahThirdStay">
                        <option value="">None</option>
                        <option value="Makkah">Makkah</option>
                        <option value="Madina">Madina</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <label class="form-label fw-medium text-primary">Nights</label>
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0"><i class="bi bi-moon text-primary"></i></span>
                    <select class="form-select border-start-0" wire:model="umrahThirdNights">
                        @for($i = 2; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }} Nights</option>
                        @endfor
                    </select>
                </div>
            </div>
            
            <!-- Total Stay Summary -->
            <div class="col-12">
                <div class="alert bg-light border border-primary">
                    <i class="bi bi-info-circle me-2 text-primary"></i>Your total stay is 
                    <strong class="text-danger">{{ $umrahFirstNights + $umrahSecondNights + ($umrahThirdStay ? $umrahThirdNights : 0) }}</strong> nights
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="col-12">
                <button class="btn btn-danger w-100 py-3 fw-bold shadow" wire:click="submitUmrahForm">
                    <i class="bi bi-arrow-right-circle me-2"></i>Get Price
                </button>
            </div>
        </div>
        @endif
    @endif
</div>

<style>
    /* Consistent with flight styling */
    .form-select, .form-control {
        border-radius: 0.375rem;
    }
    
    .input-group-text {
        border-right: none;
    }
    
    .border-start-0 {
        border-left: none !important;
    }
    
    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: white;
    }
    
    .alert {
        border-radius: 8px;
    }
    
    .shadow {
        box-shadow: 0 0.5rem 1rem rgba(13, 110, 253, 0.1) !important;
    }
    
    .text-decoration-underline:hover {
        text-decoration: none !important;
        color: #dc3545 !important;
    }
</style>