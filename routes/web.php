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
    Route::get('inscricoes/autorizacao/{id}', 'ApproverController@atualizarAprovacao')->middleware('admin.user')->name('voyager.inscricoes.autorizacao');
    Voyager::routes();
});
