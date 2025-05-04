<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\DepartamentoController;


Route::apiResource('funcionarios', FuncionarioController::class);
Route::get('funcionarios-com-departamentos', [FuncionarioController::class, 'listarComDepartamentos']);
Route::get('funcionario/{id}/departamento', [FuncionarioController::class, 'buscarDepartamento']);



Route::apiResource('departamentos', DepartamentoController::class);
Route::get('departamentos-com-funcionarios', [DepartamentoController::class, 'listarComFuncionarios']);
Route::get('departamento/{id}/funcionarios', [DepartamentoController::class, 'buscarFuncionarios']);