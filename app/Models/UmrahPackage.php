<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UmrahPackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'airport',
        'departure',
        'hotel_category',
        'transport',
        'adults',
        'children',
        'infants',
        'stays',
    ];

    protected $casts = [
        'stays' => 'array',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}