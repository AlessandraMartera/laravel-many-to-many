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
use App\Http\Controllers\MainController as MainController;
use App\Http\Controllers\TechnologyController as TechnologyController;
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/technology-show/{id}', [TechnologyController::class, 'show'])->name('technology-show');

Route::get('/show/{id}', [MainController::class, 'show'])->name('show');
Route::delete('/delete-project/{id}', [MainController::class, 'delete'])->name('delete-project');
Route::get('/create-project', [MainController::class, 'create'])->name('create-project');
Route::post('/store-projects', [MainController::class, 'store'])->name('store-projects');


// Route::get('/show/{id}',[MainController::class, 'show'])->middleware(['auth', 'verified'])->name('show');
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
