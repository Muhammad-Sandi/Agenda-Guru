<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AgendaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth', 'role:admin']], function(){
    // Kelas
    Route::get('/datakelas', [KelasController::class, 'index'])->name('datakelas');
    Route::get('/tambahkelas', [KelasController::class, 'create']);
    Route::post('/simpankelas', [KelasController::class, 'store']);
    Route::get('/editkelas/{id}', [KelasController::class, 'edit']);
    Route::put('/updatekelas/{id}', [KelasController::class, 'update']);
    Route::get('/hapuskelas/{id}', [KelasController::class, 'destroy']);
    
    // Guru
    Route::get('/dataguru', [GuruController::class, 'index'])->name('dataguru');
    Route::get('/tambahguru', [GuruController::class, 'create']);
    Route::post('/simpanguru', [GuruController::class, 'store']);
    Route::get('/hapusguru/{id}', [GuruController::class, 'destroy']);
    Route::get('/editguru/{id}', [GuruController::class, 'edit']);
    Route::put('/updateguru/{id}', [GuruController::class, 'update']);
});

Route::group(['middleware'=>['auth', 'role:guru,admin']], function(){
    // Agenda
    Route::get('/dataagenda', [AgendaController::class, 'index'])->name('dataagenda');
    Route::get('/tambahagenda', [AgendaController::class, 'create']);
    Route::post('/simpanagenda', [AgendaController::class, 'store']);
    Route::get('/hapusagenda/{id}', [AgendaController::class, 'destroy']);
    Route::get('/editagenda/{id}', [AgendaController::class, 'edit']);
    Route::put('/updateagenda/{id}', [AgendaController::class, 'update']);
});




