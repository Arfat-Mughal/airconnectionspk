<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('guest')->group(function () {

});

Route::get('/', [GuestController::class, 'index'])->name('main');
Route::get('/flights', [GuestController::class, 'fligths'])->name('flights');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
Route::get('/e-services', [GuestController::class, 'eservies'])->name('e-services');
Route::get('/umrah', [GuestController::class, 'umrah'])->name('umrah');
Route::get('/visa', [GuestController::class, 'visa'])->name('visa');

Auth::routes([
    'register' => false,
    'reset' => false,
]);

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');