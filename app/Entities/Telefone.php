<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvimento
 * Date: 26/08/2017
 * Time: 21:15
 */

namespace TecnoAgenda\Entities;

use \Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = "telefones";

    protected $fillable = [
        'numero',
        'observacao'
    ];
}