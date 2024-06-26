<?php

use App\Http\Controllers\ProfileController;
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

Route::get('groups', [App\Http\Controllers\GroupController::class, 'index']);
Route::get('groups/create', [App\Http\Controllers\GroupController::class, 'create']);
Route::post('groups/create', [App\Http\Controllers\GroupController::class, 'store']);
Route::get('groups/{id}/group', [App\Http\Controllers\GroupController::class, 'group']);
Route::get('groups/{id}/edit', [App\Http\Controllers\GroupController::class, 'edit']);
Route::put('groups/{id}/edit', [App\Http\Controllers\GroupController::class, 'update']);
Route::get('groups/{id}/delete', [App\Http\Controllers\GroupController::class, 'destroy']);


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
