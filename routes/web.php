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

$app->get('/excluir', ['as' => 'agenda.excluir', 'uses'=>'AgendaController@excluir']);

$app->get('/excluirTelefone', ['as' => 'agenda.excluirTelefone', 'uses'=>'AgendaController@excluirTelefone']);

$app->post('/pesquisa', ['as' => 'agenda.pesquisa', 'uses'=>'AgendaController@pesquisa']);

$app->get('/{letra}', ['as' => 'agenda.letra', 'uses'=>'AgendaController@index']);