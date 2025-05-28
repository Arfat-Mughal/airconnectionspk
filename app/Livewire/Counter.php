<?php

namespace App\Livewire;

use App\Mail\BookingConfirmation;
use App\Models\Booking;
use App\Models\FlightSegment;
use App\Models\UmrahPackage;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Counter extends Component
{
    // Tab configuration
    public $activeTab;
    public $tripType = 'one-way';
    public $flightClass = 'Economy';
    public $maxSegments = 5;
    
    // Passenger counts (Flights)
    public $adults = 1;
    public $children = 0;
    public $infants = 0;
    
    // Flight segments
    public $segments = [
        ['from' => '', 'to' => '', 'departure' => '', 'return' => null]
    ];
    
    // Umrah configuration
    public $umrahStep = 1;
    public $umrahAirport = 'Lahore (LHE)';
    public $umrahDeparture = '';
    public $umrahHotelCategory = 'Economy';
    public $umrahTransport = 'Shared Bus';
    public $umrahAdults = 2;
    public $umrahChildren = 0;
    public $umrahInfants = 0;
    public $umrahFirstStay = 'Makkah';
    public $umrahFirstNights = 2;
    public $umrahSecondStay = 'Madina';
    public $umrahSecondNights = 2;
    public $umrahThirdStay = '';
    public $umrahThirdNights = 2;
    
    // Contact form
    public $showContactForm = false;
    public $name;
    public $phoneCountry = '+92';
    public $phoneNumber;
    public $email;
    public $city;
    public $comments;


    public function mount($activeTab = 'flights') 
{
    $this->activeTab = $activeTab;
    
    if ($this->activeTab === 'flights') {
        $this->segments = [['from' => '', 'to' => '', 'departure' => '', 'return' => null]];
    }
}
    
    public function render()
    {
        return view('livewire.counter');
    }
    
    public function updatedActiveTab()
    {
        if ($this->activeTab === 'flights') {
            $this->tripType = 'one-way';
            $this->segments = [['from' => '', 'to' => '', 'departure' => '', 'return' => null]];
        } elseif ($this->activeTab === 'umrah') {
            $this->umrahStep = 1;
        }
        $this->showContactForm = false;
    }
    
    public function updatedTripType()
    {
        $this->segments = [['from' => '', 'to' => '', 'departure' => '', 'return' => null]];
    }
    
    public function addSegment()
    {
        if (count($this->segments) < $this->maxSegments) {
            $this->segments[] = ['from' => '', 'to' => '', 'departure' => '', 'return' => null];
        }
    }
    
    public function removeSegment($index)
    {
        if (count($this->segments) > 1) {
            unset($this->segments[$index]);
            $this->segments = array_values($this->segments);
        }
    }
    
    public function updatePassengers($type, $operation)
    {
        if ($operation === 'increment') {
            $this->{$type}++;
        } elseif ($operation === 'decrement' && $this->{$type} > ($type === 'adults' ? 1 : 0)) {
            $this->{$type}--;
        }
    }
    
    public function updateUmrahPassengers($type, $operation)
    {
        if ($operation === 'increment') {
            if ($type === 'umrahAdults' && $this->umrahAdults < 10) {
                $this->umrahAdults++;
            } elseif ($type === 'umrahChildren' && $this->umrahChildren < 8) {
                $this->umrahChildren++;
            } elseif ($type === 'umrahInfants' && $this->umrahInfants < 3) {
                $this->umrahInfants++;
            }
        } elseif ($operation === 'decrement') {
            if ($type === 'umrahAdults' && $this->umrahAdults > 2) {
                $this->umrahAdults--;
            } elseif ($type === 'umrahChildren' && $this->umrahChildren > 0) {
                $this->umrahChildren--;
            } elseif ($type === 'umrahInfants' && $this->umrahInfants > 0) {
                $this->umrahInfants--;
            }
        }
    }
    
    public function submitFlightSearch()
    {
        $rules = [
            'segments.*.from' => 'required|string|max:255',
            'segments.*.to' => 'required|string|max:255',
            'segments.*.departure' => 'required|date',
        ];
        
        if ($this->tripType === 'round-trip') {
            $rules['segments.0.return'] = 'required|date|after:segments.0.departure';
        } else {
            $rules['segments.*.return'] = 'nullable|date';
        }
        
        $this->validate($rules);
        $this->showContactForm = true;
    }
    
    public function goToUmrahStep2()
    {
        $this->validate([
            'umrahAirport' => 'required|string|max:255',
            'umrahDeparture' => 'required|date',
            'umrahHotelCategory' => 'required|string|max:255',
            'umrahTransport' => 'required|string|max:255',
            'umrahAdults' => 'required|integer|min:2|max:10',
            'umrahChildren' => 'required|integer|min:0|max:8',
            'umrahInfants' => 'required|integer|min:0|max:3',
        ]);
        
        $this->umrahSecondStay = $this->umrahFirstStay === 'Makkah' ? 'Madina' : 'Makkah';
        $this->umrahStep = 2;
    }
    
    public function goToUmrahStep1()
    {
        $this->umrahStep = 1;
    }
    
    public function submitUmrahForm()
    {
        $this->validate([
            'umrahFirstStay' => 'required|string|max:255',
            'umrahFirstNights' => 'required|integer|min:2|max:10',
            'umrahSecondStay' => 'required|string|max:255',
            'umrahSecondNights' => 'required|integer|min:2|max:10',
            'umrahThirdNights' => 'required_if:umrahThirdStay,!=,|integer|min:2|max:10',
        ]);
        
        $this->showContactForm = true;
    }
    
    public function submitContactForm()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'phoneNumber' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);
        
        // Create booking
        $booking = Booking::create([
            'type' => $this->activeTab,
            'name' => $this->name,
            'phone_country' => $this->phoneCountry,
            'phone_number' => $this->phoneNumber,
            'email' => $this->email,
            'city' => $this->city,
            'comments' => $this->comments,
        ]);
        
        if ($this->activeTab === 'flights') {
            foreach ($this->segments as $segment) {
                // Normalize return date
                $returnDate = $this->tripType === 'round-trip' && !empty($segment['return']) 
                    ? $segment['return'] 
                    : null;
                
                FlightSegment::create([
                    'booking_id' => $booking->id,
                    'from' => $segment['from'],
                    'to' => $segment['to'],
                    'departure' => $segment['departure'],
                    'return' => $returnDate,
                ]);
            }
        } else {
            UmrahPackage::create([
                'booking_id' => $booking->id,
                'airport' => $this->umrahAirport,
                'departure' => $this->umrahDeparture,
                'hotel_category' => $this->umrahHotelCategory,
                'transport' => $this->umrahTransport,
                'adults' => $this->umrahAdults,
                'children' => $this->umrahChildren,
                'infants' => $this->umrahInfants,
                'stays' => [
                    'first_stay' => $this->umrahFirstStay,
                    'first_nights' => $this->umrahFirstNights,
                    'second_stay' => $this->umrahSecondStay,
                    'second_nights' => $this->umrahSecondNights,
                    'third_stay' => $this->umrahThirdStay,
                    'third_nights' => $this->umrahThirdStay ? $this->umrahThirdNights : null,
                ],
            ]);
        }
        
        // Send email
        try {
            Mail::to('arfat.bjs@gmail.com')->send(new BookingConfirmation($booking));
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
        }
        
        session()->flash('message', 'Your ' . ($this->activeTab === 'umrah' ? 'Umrah' : 'flight') . ' booking request has been submitted successfully!');
        $this->resetExcept(['activeTab', 'tripType', 'flightClass']);
        $this->umrahStep = 1;
    }
}