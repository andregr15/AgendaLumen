<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', ['as' => 'agenda.index', 'uses'=>'AgendaController@index']);

$app->get('/delete/{id}', ['as' => 'pessoa.delete', 'uses'=>'PessoaController@delete']);

$app->delete('/destroy', ['as' => 'pessoa.destroy', 'uses'=>'PessoaController@destroy']);

$app->get('/deleteTelefone/{id}', ['as' => 'telefone.delete', 'uses'=>'TelefoneController@delete']);

$app->delete('/destroyTelefone', ['as' => 'telefone.destroy', 'uses'=>'TelefoneController@destroy']);

$app->post('/pesquisa', ['as' => 'agenda.pesquisa', 'uses'=>'AgendaController@pesquisa']);

$app->get('/{letra}', ['as' => 'agenda.letra', 'uses'=>'AgendaController@index']);