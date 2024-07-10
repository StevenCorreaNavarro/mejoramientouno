<?php
namespace App\Http\Controllers;// aca pego lo del controlador

use App\Models\Player;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('jugador/listar',[PlayerController::class,'listar'])->name('player.listar');//primero coloco la direccion; cambia el controllador  y donde va EL NAME coloco en nombre del conrolador y despues va la funcion  
Route::get('jugador/create',[PlayerController::class,'create'])->name('player.create');
Route::post('jugador/store', [PlayerController::class,'store'])->name('player.store');
Route::get('jugador/{player}', [PlayerController::class, 'show'])->name('player.show');
Route::put('jugador/{player}',[PlayerController::class,'update'])->name('player.update');
Route::get('jugador/{player}/editar',[PlayerController::class,'edit'])->name('player.edit');//dentro de esa llaves va en singular 
Route::delete('jugador/{player}',[PlayerController::class,'destroy'])->name('player.destroy');