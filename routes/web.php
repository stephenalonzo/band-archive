<?php

use App\Http\Controllers\ArchiveController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArchiveController::class, 'index'])->name('home');
Route::get('/leader/{leader:song_leader_name}', [ArchiveController::class, 'show'])->name('viewLeaderSongs');
