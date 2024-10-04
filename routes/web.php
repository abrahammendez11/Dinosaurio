<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresentacionController;
use App\Http\Controllers\CancelacionController;
use App\Http\Controllers\EvasersocController;
use App\Http\Controllers\liberacionController;
use App\Http\Controllers\RepoactController;
use App\Http\Controllers\RepropresentController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/presentacion', [PresentacionController::class, 'create'])->middleware(App::class)->name('presentacion.create');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/repoact', [RepoactController::class, 'create'])->middleware(App::class)->name('repoact.create');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/cancelacion', [CancelacionController::class, 'create'])->name('cancelacion.create');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/evaluacion', [EvasersocController::class, 'create'])->middleware(App::class)->name('evasersoc.create');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/liberacion', [liberacionController::class, 'create'])->middleware(App::class)->name('liberacion.create');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/repropesent', [RepropresentController::class, 'create'])->middleware(App::class)->name('repropesent.create');
});