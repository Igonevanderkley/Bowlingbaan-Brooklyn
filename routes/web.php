<?php

use App\Http\Controllers\ProfileController;
use App\Models\Player;
use App\Models\Score;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountOverzichtController;

use function Laravel\Prompts\select;
use App\Http\Controllers\ScoresController;


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
    Route::get('/account/edit/{id}', [AccountOverzichtController::class, 'edit'])->name('account.edit');
    Route::put('/account/update/{id}', [AccountOverzichtController::class, 'update'])->name('account.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
