<?php

use App\Http\Controllers\ProfileController;
use App\Models\Player;
use App\Models\Score;
use App\Models\Reservation;
use Illuminate\Support\Facades\DB;




use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\select;
use App\Http\Controllers\ScoresController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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


Route::get('/create-score/{slug}', function ($reservationId) {

    return view('scores/create-score', [
        'reservationId' => $reservationId,
    ]);
})->middleware(['auth', 'verified'])->name('create-score');

Route::post('/ScoresController/store', [ScoresController::class, 'store'])->name('ScoresController.store');








Route::get('/leaderboard', function () {
    $scores = Score::orderBy('score', 'desc')->limit(10)->get();

    return view('scores/leaderboard', [
        'scores' => $scores,
    ]);
})->middleware(['auth', 'verified'])->name('scores');















Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
