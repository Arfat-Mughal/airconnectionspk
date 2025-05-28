<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $fillable = [
        'iata_code',
        'airport',
        'city',
        'country',
        'phonecode',
        'latitude',
        'longitude',
        'flag'
    ];
    
    // Helper method for display
    public function getDisplayNameAttribute()
    {
        return "{$this->city} ({$this->iata_code}) - {$this->airport}";
    }
}