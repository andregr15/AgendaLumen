<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvimento
 * Date: 28/08/2017
 * Time: 21:49
 */

namespace TecnoAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones(){
        return $this->hasMany(Telefone::class);
    }
}