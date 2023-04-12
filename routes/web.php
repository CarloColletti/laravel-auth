<?php
// profile controller 
use App\Http\Controllers\ProfileController;

// admin controller 
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\ProjectController;

// guest controler 
use App\Http\Controllers\Guest\HomeController as GuestHomeController;
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

// rotta home come guest 
Route::get('/', [GuestHomeController::class, 'index'] );

// rotta alla dashboard una volta loggato 
Route::get('/dashboard', [AdminHomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')
    ->prefix('/Admin')
    ->name('Admin.')
    ->group(function () {
    // rotta resouce project 
    Route::resource('projects', ProjectController::class);
});


Route::middleware('auth')
    ->prefix('/admin')
    ->name('profile.')
    ->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
});

require __DIR__.'/auth.php';