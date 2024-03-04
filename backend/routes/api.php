<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MateriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//todas as materias
Route::get('/materias', [MateriaController::class, 'index'])->name('materias');

//uma matéria
Route::get('/materias/{materia}', [MateriaController::class, 'show'])->name('materia');
Route::post('/materia', [MateriaController::class, 'store'])->name('materia');
Route::put('/materias/{materia}', [MateriaController::class, 'update'])->name('materia');
Route::delete('/materias/{materia}', [MateriaController::class, 'destroy'])->name('materia');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
