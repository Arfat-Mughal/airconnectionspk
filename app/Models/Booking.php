<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'name',
        'phone_country',
        'phone_number',
        'email',
        'city',
        'comments',
    ];

    public function flightSegments()
    {
        return $this->hasMany(FlightSegment::class);
    }

    public function umrahPackage()
    {
        return $this->hasOne(UmrahPackage::class);
    }
}