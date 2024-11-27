<?php

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

use App\Http\Controllers\MattressController;

// Mattress List Page
Route::get('/', [MattressController::class, 'index'])->name('mattresses.index');

// Mattress detail Page
Route::get('/mattress/{id}', [MattressController::class, 'show'])->name('product.show');