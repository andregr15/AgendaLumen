<?php

namespace TecnoAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = "contatos";

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];
}