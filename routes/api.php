<?php

use App\Module\Note\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/notes', [NoteController::class, 'store'])
    ->name('note.store');

Route::get('/notes/{id}', [NoteController::class, 'show'])
    ->name('note.show');

Route::get('/notes', [NoteController::class, 'index'])
    ->name('note.index');

Route::put('/notes/{id}', [NoteController::class, 'update'])
    ->name('note.update');

Route::delete('/notes/{id}', [NoteController::class, 'destroy'])
    ->name('note.destroy');
