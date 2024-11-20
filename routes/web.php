<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresentacionController;
use App\Http\Controllers\CancelacionController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\liberacionController;
use App\Http\Controllers\RepoactController;
use App\Http\Controllers\RepropresentController;
use App\Http\Controllers\RegistroservController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterAdminController;
use App\Http\Controllers\informacioncompController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginadmin',[LoginAdminController::class,'create'])->name('loginadmin.create');


Route::get('/registeradmin/create',[RegisterAdminController::class,'create'])->name('registeradmin.create');
Route::post('/registeradmin',[RegisterAdminController::class,'store'])->name('registeradmin.store');




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

    Route::get('/informacioncomp', [informacioncompController::class, 'create'])->name('informacioncomp.create');
   /*  Route::get('/registroserv',[informacioncompController::class, 'store']); */
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/presentacion', [PresentacionController::class, 'create'])->name('presentacion.create');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/repoact', [RepoactController::class, 'create'])->name('repoact.create');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/cancelacion', [CancelacionController::class, 'create'])->name('cancelacion.create');
});

/* Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/evasersoc', [EvaluacionController::class, 'create'])->middleware(App::class)->name('.store');
}); */

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/liberacion', [liberacionController::class, 'create'])->name('liberacion.create');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/repropesent', [RepropresentController::class, 'create'])->middleware(App::class)->name('repropesent.create');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/registroserv', [RegistroservController::class, 'create'])->name('registroserv.create');
    Route::post('/registroserv',[RegistroservController::class, 'store'])->name ('registroserv.store');
    Route::get('/registroserv/{id}', [RegistroservController::class, 'store'])->name('registroserv.store');

});/* ->name('registroserv'); */

// Rutas POST para enviar datos
Route::middleware(['auth', 'verified'])->group(function () {
    Route::match(['get','post'],'/evaluacion', [EvaluacionController::class, 'store'])->name('evaluacion.store');
});