<?php

use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\Dashboard\DriverController;
use App\Http\Controllers\Dashboard\RouteController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //aca todo los que sean admin
    Route::middleware(['role:admin'])->group(function(){
         Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
         Route::resource('driver', DriverController::class);
         Route::resource('route', RouteController::class);
     });

    // aca todos los que sean de tipo alumno0
    Route::middleware(['role:alumno'])->group(function(){
          Route::get('/alumno/dashboard', [AlumnoController::class, 'AlumnoDashboard'])->name('alumno.dashboard');
    });

});

//Route::resource('user', UserController::class);


require __DIR__.'/auth.php';
