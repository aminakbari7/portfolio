<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isadmin;
use App\Livewire\Createp;
use App\Livewire\Showp;

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

Route::get('/', function () {return view('welcome');});
Route::get('/', function () {return view('welcome');})->name('welcome');



Route::get('/admin/createproject', function () {
    return view('/admin/createproject');
})->middleware(['auth', 'verified','isadmin'])->name('createproject');
Route::get('/admin/showprojects', function () {
    return view('/admin/showprojects');
})->middleware(['auth', 'verified','isadmin'])->name('showprojects');



Route::get('/createp',Createp::class)->middleware(['auth', 'verified','isadmin']);
Route::get('/showp',Showp::class)->middleware(['auth', 'verified','isadmin']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
