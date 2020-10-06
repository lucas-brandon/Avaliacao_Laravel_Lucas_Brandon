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

//rotas Tabelião
Route::get('/tabelioes/listar', 'Api\TabeliaoController@listar');
Route::post('/tabelioes/salvar', 'Api\TabeliaoController@salvar');
Route::get('/tabelioes/buscar/{id}', 'Api\TabeliaoController@buscar');
Route::put('/tabelioes/atualizar/{id}', 'Api\TabeliaoController@atualizar');
Route::delete('/tabelioes/deletar/{id}', 'Api\TabeliaoController@deletar');

//rotas Certidão
Route::get('/certidoes/listar', 'Api\CertidaoController@listar');
Route::post('/certidoes/salvar', 'Api\CertidaoController@salvar');
Route::get('/certidoes/buscar/{id}', 'Api\CertidaoController@buscar');
Route::put('/certidoes/atualizar/{id}', 'Api\CertidaoController@atualizar');
Route::delete('/certidoes/deletar/{id}', 'Api\CertidaoController@deletar');

//rotas Contratos
Route::get('/contratos/listar', 'Api\ContratoController@listar');
Route::post('/contratos/salvar', 'Api\ContratoController@salvar');
Route::get('/contratos/buscar/{id}', 'Api\ContratoController@buscar');
Route::put('/contratos/atualizar/{id}', 'Api\ContratoController@atualizar');
Route::delete('/contratos/deletar/{id}', 'Api\ContratoController@deletar');
