<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [NoteController::class, 'index'])->name('notes.index');
Route::get('notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('notes', [NoteController::class, 'store'])->name('notes.store');
Route::get('notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
Route::put('notes/{note}', [NoteController::class, 'update'])->name('notes.update');
Route::delete('notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');