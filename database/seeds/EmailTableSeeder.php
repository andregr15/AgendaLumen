<?php

class EmailTableSeeder extends \Illuminate\Database\Seeder
{
    public function run(){
        factory(\TecnoAgenda\Entities\Email::class, 80)->create();
    }
}