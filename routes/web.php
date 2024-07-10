<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('cliente/listar',[ClientController::class,'listar'])->name('client.listar');//primero coloco la direccion; cambia el controllador  y donde va EL NAME coloco en nombre del conrolador y despues va la funcion  
Route::get('cliente/create',[ClientController::class,'create'])->name('client.create');
Route::post('cliente/store', [ClientController::class,'store'])->name('client.store');
Route::get('cliente/{client}', [ClientController::class, 'show'])->name('client.show');
Route::put('cliente/{client}',[ClientController::class,'update'])->name('client.update');
Route::get('cliente/{client}/editar',[ClientController::class,'edit'])->name('client.edit');//dentro de esa llaves va en singular 
Route::delete('cliente/{client}',[ClientController::class,'destroy'])->name('client.destroy');