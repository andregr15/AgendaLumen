<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvimento
 * Date: 26/08/2017
 * Time: 21:18
 */

namespace TecnoAgenda\Entities;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = "emails";

    protected $fillable = [
        'email',
        'observacao'
    ];
}