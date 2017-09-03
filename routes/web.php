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

/*
 * Agenda
 */

$app->get('/', [
    'as' => 'agenda.index',
    'uses'=>'AgendaController@index'
]);

$app->get('/{letra}', [
    'as' => 'agenda.letra',
    'uses'=>'AgendaController@index'
]);


/*
 * Contato
 */

$app->get('/contato/create', [
    'as'=>'pessoa.create',
    'uses'=>'PessoaController@create'
]);

$app->post('/contato/store', [
    'as'=>'pessoa.store',
    'uses'=>'PessoaController@store'
]);

$app->post('/contato/pesquisa', [
    'as' => 'agenda.pesquisa',
    'uses'=>'AgendaController@pesquisa'
]);

$app->get('/contato/delete/{id}', [
    'as' => 'pessoa.delete',
    'uses'=>'PessoaController@delete'
]);

$app->delete('/contato/destroy', [
    'as' => 'pessoa.destroy',
    'uses'=>'PessoaController@destroy'
]);

$app->get('/contato/edit/{id}',[
    'as'=>'pessoa.edit',
    'uses'=>'PessoaController@edit'
]);

$app->put('/contato/update/',[
    'as'=>'pessoa.update',
    'uses'=>'PessoaController@update'
]);

/*
 * Telefone
 */

$app->get('/telefone/delete/{id}', [
    'as' => 'telefone.delete',
    'uses'=>'TelefoneController@delete'
]);

$app->delete('/telefone/destroy', [
    'as' => 'telefone.destroy',
    'uses'=>'TelefoneController@destroy'
]);

$app->get('/telefone/create/{pessoaId}', [
   'as' => 'telefone.create',
   'uses'=> 'TelefoneController@create'
]);

$app->post('/telefone/store', [
    'as' => 'telefone.store',
    'uses'=> 'TelefoneController@store'
]);

$app->get('/telefone/edit/{id}', [
    'as' => 'telefone.edit',
    'uses'=> 'TelefoneController@edit'
]);

$app->put('/telefone/update', [
    'as' => 'telefone.update',
    'uses'=> 'TelefoneController@update'
]);

/*
 * Emails
 */

$app->get('/email/delete/{id}', [
    'as' => 'email.delete',
    'uses'=>'EmailController@delete'
]);

$app->delete('/email/destroy', [
    'as' => 'email.destroy',
    'uses'=>'EmailController@destroy'
]);

$app->get('/email/create/{pessoaId}', [
    'as' => 'email.create',
    'uses'=> 'EmailController@create'
]);

$app->post('/email/store', [
    'as' => 'email.store',
    'uses'=> 'EmailController@store'
]);

$app->get('/email/edit/{id}', [
    'as' => 'email.edit',
    'uses'=> 'EmailController@edit'
]);

$app->put('/email/update', [
    'as' => 'email.update',
    'uses'=> 'EmailController@update'
]);





