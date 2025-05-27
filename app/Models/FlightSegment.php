<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightSegment extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'from',
        'to',
        'departure',
        'return',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}