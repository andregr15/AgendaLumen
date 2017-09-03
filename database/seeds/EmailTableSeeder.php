<?php

use Illuminate\Database\Seeder;

class EmailTableSeeder extends Seeder
{
    public function run(){
        factory(\TecnoAgenda\Entities\Email::class, 80)->create();
    }
}