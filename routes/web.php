<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AccountOverzichtController;
use App\Models\Player;
use App\Models\Score;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersoonController;
use function Laravel\Prompts\select;
use App\Http\Controllers\ScoresController;
use App\Http\Controllers\UitslagenController;
use App\Models\Uitslagen;
use App\Http\Controllers\SpelerController;

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

Route::get('/packages', [PackageController::class, 'index'])->middleware(['auth', 'verified'])->name('packages');
Route::get('packages/create', [PackageController::class, 'create'])->middleware(['auth', 'verified'])->name('packages.create');
Route::get('/packages/{id}/edit', [PackageController::class, 'edit'])->middleware(['auth', 'verified'])->name('packages.edit');

Route::delete('/packages/{id}', [PackageController::class, 'destroy'])->middleware(['auth', 'verified'])->name('packages.destroy');

Route::get('/account', [AccountOverzichtController::class, 'index'])->middleware(['auth', 'verified'])->name('account');
Route::delete('/account/{id}', [AccountOverzichtController::class, 'destroy'])->middleware(['auth', 'verified'])->name('users.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/account/edit/{id}', [AccountOverzichtController::class, 'edit'])->name('account.edit');
    Route::put('/account/update/{id}', [AccountOverzichtController::class, 'update'])->name('account.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/spelers/{id}', [SpelerController::class, 'show'])->name('spelers.detail');
Route::resource('uitslagen', PersoonController::class)
    ->only(['index', 'show'])
    ->middleware(['auth', 'verified']);

Route::resource('spelers', SpelerController::class)
    ->only(['index', 'show', 'store', 'edit', 'update'])
    ->middleware(['auth', 'verified']);
require __DIR__ . '/auth.php';
