<?php

// app/Http/Controllers/GuestController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{

    // Landing page
    public function fligths()
    {
        return view('pages.flights');
    }

    // Pricing page
    public function contact()
    {
        return view('pages.contact');
    }

    // About us page
    public function index()
    {
        return view('pages.home');
    }

    public function eservies()
    {
        return view('pages.offer');
    }

     public function umrah()
    {
        return view('pages.umrah');
    }

      public function visa()
    {
        return view('pages.visa');
    }
}