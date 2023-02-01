<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/activities', [ActivityController::class, 'list'])->name('activity.list');
    Route::get('/activities/{id}', [ActivityController::class, 'show'])->name('activity.show');
    Route::post('/reservations/store', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/reservations/confirmation', [ReservationController::class, 'confirmation'])->name('reservation.confirmation');
    Route::get('/reservations', [ReservationController::class, 'list'])->name('reservation.list');


});

require __DIR__.'/auth.php';
