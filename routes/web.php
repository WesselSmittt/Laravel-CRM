<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KlantController;
use App\Http\Controllers\PersonenController;



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


Route::middleware(['auth'])->group(function () {
    // Andere routes die authenticatie vereisen

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Auth::routes(); // Deze lijn kan al in je web.php staan en bevat standaard Laravel-authenticatieroutes


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// routes/web.php

Route::get('/dashboard/klanten', [DashboardController::class, 'goToKlantenOverview'])->name('dashboard.klanten');
Route::get('/klanten/create', [KlantController::class, 'create'])->name('klanten.create');
Route::get('/klanten', [KlantController::class, 'index'])->name('klanten.index');
Route::post('/klanten', [KlantController::class, 'store'])->name('klanten.store');
Route::get('/klanten/{klant}/edit', [KlantController::class, 'edit'])->name('klanten.edit');
Route::delete('/klanten/{klant}', [KlantController::class, 'destroy'])->name('klanten.destroy');
Route::resource('klanten', KlantController::class);
Route::put('/klanten', [KlantController::class, 'update'])->name('klanten.update');
Route::get('/klanten/{klant}', [KlantController::class, 'show'])->name('klanten.show');


Route::get('/contacten', [PersonenController::class, 'index'])->name('contacten.index');
Route::get('/contacten/create', [PersonenController::class, 'create'])->name('contacten.create');
Route::post('/contacten', [PersonenController::class, 'store'])->name('contacten.store');
Route::get('/contacten/{id}', [PersonenController::class, 'show'])->name('contacten.show');
Route::get('/contacten/{id}/edit', [PersonenController::class, 'edit'])->name('contacten.edit');
Route::put('/contacten/{id}', [PersonenController::class, 'update'])->name('contacten.update');
Route::delete('/contacten/{id}', [PersonenController::class, 'destroy'])->name('contacten.destroy');
Route::post('/klanten/{klant}/toegewezen', [KlantController::class, 'toegewezenPersoonToevoegen'])->name('toegewezen.toevoegen');
Route::delete('/klanten/{klant}/toegewezen/{persoon}', [KlantController::class, 'verwijderToegewezenPersoon'])->name('toegewezen.verwijderen');


require __DIR__.'/auth.php';
