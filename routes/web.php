<?php
//definição das rotas usadas
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;

Route::get('/', fn() => redirect()->route('tarefas.index'));
Route::resource('tarefas', TarefaController::class);
