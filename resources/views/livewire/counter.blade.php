<div class="booking-form-container">
    <div class="container py-3 py-md-4">
        @if(!$showContactForm)
        <div class="card shadow-sm border-0 overflow-hidden">
            <!-- Main Tab Navigation -->
            <div class="card-header p-0 bg-white border-bottom">
                <ul class="nav nav-tabs nav-fill card-header-tabs">
                    <li class="nav-item">
                        <button class="nav-link {{ $activeTab === 'flights' ? 'active text-danger' : 'text-dark' }}" 
                                wire:click="$set('activeTab', 'flights')">
                            <i class="bi bi-airplane-fill me-1"></i> Flights
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link {{ $activeTab === 'umrah' ? 'active text-danger' : 'text-dark' }}" 
                                wire:click="$set('activeTab', 'umrah')">
                            <i class="bi bi-moon-stars me-1"></i> Umrah
                        </button>
                    </li>
                </ul>
            </div>
            
            <!-- Include Form Based on Active Tab -->
            @if($activeTab === 'flights')
                @include('livewire.flights-form')
            @elseif($activeTab === 'umrah')
                @include('livewire.umrah-form')
            @endif
        </div>
        @else
            @include('livewire.contact-form')
        @endif
        
        @if(session()->has('message'))
        <div class="alert alert-success mt-4">
            <i class="bi bi-check-circle-fill me-2"></i> {{ session('message') }}
        </div>
        @endif
    </div>
</div>