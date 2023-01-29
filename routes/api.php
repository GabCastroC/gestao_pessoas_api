<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/pessoas", 'App\Http\Controllers\PessoaController@listarPessoas');
Route::post("/pessoas", 'App\Http\Controllers\PessoaController@cadastrarPessoa');
Route::patch("/pessoas", 'App\Http\Controllers\PessoaController@deletarPessoa');