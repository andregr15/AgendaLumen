<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvimento
 * Date: 03/09/2017
 * Time: 16:17
 */

namespace TecnoAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'emails';

    protected $fillable = [
        'descrição',
        'email'
    ];

    public function pessoa(){
        return $this->belongsTo(Pessoa::class);
    }
}