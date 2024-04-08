<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\reviewController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/movies', [MovieController::class, 'index'])->middleware(['auth', 'verified'])->name('movies');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

Route::get('/movies/{film}/review', [reviewController::class, 'create'])->name('movies.review.create');
Route::post('/movies/{film}/review', [ReviewController::class, 'submit'])->name('movies.review.submit');

Route::get('/watchlist', [WatchlistController::class, 'index'])->name('watchlist');
Route::post('/watchlist/add/{filmId}', [MovieController::class, 'addToWatchlist'])->name('watchlist.add');
Route::delete('/watchlist/remove/{filmId}', [MovieController::class, 'removeFromWatchlist'])->name('watchlist.remove');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
