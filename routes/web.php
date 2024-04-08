<?php /**
 * This file contains the routes for the web application.
 */

use App\Http\Controllers\ProfileController;
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
Route::middleware('auth')->group(function () {
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
->name('reserveringen');

Route::patch('/update', [ReserveringController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('update');

require __DIR__ . '/auth.php';
