<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::post('cadastrar', 'HomeController@store')->name('cadastrar');
Route::post('buscar', 'HomeController@buscar')->name('buscar');


Route::group(['prefix' => 'admin'], function () {
    Route::post('inscricoes/analise/{id}/aceitar', 'ApproverController@aprovarInscricao')->middleware('admin.user')->name('voyager.inscricoes.analise.aceitar');
    Route::get('inscricoes/analise/{id}/rejeitar', 'ApproverController@rejeitarInscricao')->middleware('admin.user')->name('voyager.inscricoes.analise.rejeitar');
    Route::get('inscricoes/analise/{id}/desfazer', 'ApproverController@desfazerAnaliseInscricao')->middleware('admin.user')->name('voyager.inscricoes.analise.desfazer');
    Route::get('inscricoes/analise/{id}/imprimir', 'ApproverController@imprimirFormularioInscricao')->middleware('admin.user')->name('voyager.inscricoes.analise.imprimir');
    Voyager::routes();
});
