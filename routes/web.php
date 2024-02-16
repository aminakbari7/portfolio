<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isadmin;
use App\Livewire\Adminproject;
use App\Livewire\Adminusers;
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





//----------- admins jobs
Route::middleware(['auth', 'verified','isadmin'])->group(function () {
    Route::get('/admin/createproject', function () {return view('/admin/createproject');})->name('createproject');
    Route::get('/admin/showprojects', function () { return view('/admin/showprojects');})->name('showprojects');
    Route::get('/admin/showusers', function () {return view('/admin/showusers');})->name('showusers');

    //----- livewire admin 
    Route::get('/createp',Createp::class);
    Route::get('/adminproject',Adminproject::class);
    Route::get('/adminusers',Adminusers::class);

});
///-----users auth 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', function () {return view('dashboard');});
});

require __DIR__.'/auth.php';
