<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OffreController;
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
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

// if the 'post' method returns a page that must only be seen by admin, dont fort to add the middleware like this in order to protecte the access. 
// Route::get('/post', [HomeController::class, 'post'])->middleware(['auth','admin']);
// the middleware 'admin' is already created. 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/offres', [OffreController::class, 'index'])->name('offres.index');
    Route::get('/stages', [OffreController::class, 'stage'])->name('offres.stage');
    Route::get('/emplois', [OffreController::class, 'emploi'])->name('offres.emploi');
    Route::get('/mes_offres', [OffreController::class, 'ttMesOffres'])->name('offres.ttMesOffres');
    Route::get('/mes_offres/{type}', [OffreController::class, 'ttMesOffres'])->name('offres.MesOffres');
});


Route::middleware('auth','recruteur')->group(function () {
   
    Route::post('/stages/insert/{type}', [OffreController::class, 'store'])->name('offres.store');
    Route::get('/offres/create/{type}', [OffreController::class, 'create'])->name('offres.create');
    
});

require __DIR__.'/auth.php';



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');