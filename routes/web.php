<?php /**
 * This file contains the routes for the web application.
 */

use App\Http\Controllers\MijnReserveringenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\AccountOverzichtController;
use App\Models\Player;
use App\Models\Score;
use App\Models\Reservation;
use App\Models\Reservering;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use function Laravel\Prompts\select;
use App\Http\Controllers\ScoresController;
use App\Http\Controllers\ReserveringController;

/**
 * Route for the home page.
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * Route for the dashboard page.
 * Only accessible for authenticated and verified users.
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Route for displaying scores for a specific reservation.
 * @param int $reservationId The ID of the reservation.
 */
Route::get('/scores/{slug}', function ($reservationId) {
    $scores = score::all();
    $players = player::all();
    
    $scores = Player::select('scores.round', 'scores.score','players.name')
        ->orderBy('scores.score', 'desc')
        ->join('scores', 'players.id', '=', 'scores.playerId')
        ->where('players.reservationId', $reservationId)
        ->get(['players.*', 'scores.score']);
     
    return view('scores/scores', [
        'scores' => $scores,
        'players' => $players,
        'reservationId' => $reservationId,
    ]);
})->middleware(['auth', 'verified'])->name('scores');

/**
 * Route for creating a new score for a specific reservation.
 * @param int $reservationId The ID of the reservation.
 */
Route::get('/create-score/{slug}', function ($reservationId) {
    return view('scores/create-score', [
        'reservationId' => $reservationId,
    ]);
})->middleware(['auth', 'verified'])->name('create-score');

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

/**
 * Route for storing a new score.
 * Uses the ScoresController's store method.
 */
Route::post('/ScoresController/store', [ScoresController::class, 'store'])->name('ScoresController.store');

/**
 * Route for displaying the leaderboard.
 * Only accessible for authenticated and verified users.
 */
Route::get('/leaderboard', function () {
    $scores = Score::orderBy('score', 'desc')->limit(10)->get();

    return view('scores/leaderboard', [
        'scores' => $scores,
    ]);
})->middleware(['auth', 'verified'])->name('scores');

/**
 * Group of routes that require authentication.
 */
Route::delete('/packages/{id}', [PackageController::class, 'destroy'])->middleware(['auth', 'verified'])->name('packages.destroy');


Route::get('/account/mijnReserveringen', [MijnReserveringenController::class, 'mijnReserveringen'])->middleware(['auth', 'verified'])->name('mijnReserveringen');

Route::get('/account', [AccountOverzichtController::class, 'index'])->middleware(['auth', 'verified'])->name('account');
Route::delete('/account/{id}', [AccountOverzichtController::class, 'destroy'])->middleware(['auth', 'verified'])->name('users.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/account/edit/{id}', [AccountOverzichtController::class, 'edit'])->name('account.edit');
    Route::put('/account/update/{id}', [AccountOverzichtController::class, 'update'])->name('account.update');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//individueel
Route::get('/reserveringen/{persoonId}', [ReserveringController::class, 'showReservations'])
->middleware(['auth', 'verified'])
->name('reserveringen');

Route::get('/filter-reservations', [ReserveringController::class, 'filter'])
    ->middleware(['auth', 'verified'])
    ->name('filterReservations');

Route::get('/edit/{reserveringId}/{baanId}/{persoonId}', [ReserveringController::class, 'showEdit'])
->middleware(['auth', 'verified'])
->name('edit');

Route::patch('/update', [ReserveringController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('update');

require __DIR__ . '/auth.php';
