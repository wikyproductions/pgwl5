<?php
use App\Http\Controllers\PointsController;
use App\Http\Controllers\PolylinesController;
use App\Http\Controllers\PolygonController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/peta', [PageController::class, 'peta'])->name('peta');

Route::get('/tabel', [PageController::class, 'tabel'])->name('tabel');

//Points
Route::post('/store-points', [\App\Http\Controllers\PointsController::class, 'store'])->name('points.store');

//Polylines
Route::post('/store-polylines', [\App\Http\Controllers\PolylinesController::class, 'store'])->name('polylines.store');

//Polygon
Route::post('/store-polygon', [\App\Http\Controllers\PolygonController::class, 'store'])->name('polygon.store');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';
