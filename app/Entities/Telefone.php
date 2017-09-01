<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvimento
 * Date: 28/08/2017
 * Time: 21:50
 */

namespace TecnoAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [
        'descrição',
        'codpaís',
        'ddd',
        'prefixo',
        'sufixo'
    ];

    public function getNumeroAttribute(){
        return "{$this->codpaís} ({$this->ddd}) {$this->prefixo}-{$this->sufixo}";
    }

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
}