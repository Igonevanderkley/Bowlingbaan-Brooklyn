<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/reservation', function () {
    return view('reservation/reservation');
})->name('reservation');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

Route::get('/reservation/overview', [ReservationController::class, 'overview'])->name('overview');

Route::get('/reservations/{reservation}/edit', [ReservationController::class, 'edit'])->name('edit');
Route::delete('/reservations/{reservation}', [ReservationController::class, 'destroy'])->name('destroy');
Route::put('/reservations/{reservation}', [ReservationController::class, 'update'])->name('update');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
