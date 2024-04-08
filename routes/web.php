<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;

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

Route::get('/packages', [PackageController::class, 'index'])->middleware(['auth', 'verified'])->name('packages');
Route::get('packages/create', [PackageController::class, 'create'])->middleware(['auth', 'verified'])->name('packages.create');
Route::get('/packages/{id}/edit', [PackageController::class, 'edit'])->middleware(['auth', 'verified'])->name('packages.edit');

Route::delete('/packages/{id}', [PackageController::class, 'destroy'])->middleware(['auth', 'verified'])->name('packages.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
