<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\PresentacionController;
use Illuminate\Support\Facades\CancelacionController;
use Illuminate\Support\Facades\EvasersocController;
use Illuminate\Support\Facades\liberacionController;
use Illuminate\Support\Facades\RepoactController;
use Illuminate\Support\Facades\RepropresentController;


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

    Route::get('/cancelacion', [CancelacionController::class, 'create'])->middleware(App::class)->name('cancelacion.create');
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