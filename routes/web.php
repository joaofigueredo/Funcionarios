<?php

use App\Http\Controllers\FuncionarioController;
use App\Models\Funcionario;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [FuncionarioController::class, 'index'])
    ->name('funcionario.index');

Route::get('/criar', [FuncionarioController::class, 'criar'])
    ->name('funcionario.criar');

Route::post('/salvar', [FuncionarioController::class, 'salvar'])
    ->name('funcionario.salvar');

Route::get('/funcionario/{funcionario}/editar', [FuncionarioController::class, 'editar'])
    ->name('funcionario.editar');

Route::put('/funcionario/atualizar', [FuncionarioController::class, 'atualizar'])
    ->name('funcionario.atualizar');

Route::delete('/funcionario/{funcionario}/deletar', [FuncionarioController::class, 'deletar'])
    ->name('funcionario.deletar');



Route::get('/funcionarios/{funcionario}', [FuncionarioController::class, 'show'])
    ->name('funcionario.show');
