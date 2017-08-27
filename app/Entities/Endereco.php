<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvimento
 * Date: 26/08/2017
 * Time: 21:17
 */

namespace TecnoAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = "enderecos";

    protected $fillable = [
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cep',
        'cidade',
        'estado',
        'observacao'
    ];
}