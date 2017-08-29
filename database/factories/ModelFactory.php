<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

//$factory->define(TecnoAgenda\User::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->name,
//        'email' => $faker->email,
//    ];
//});

$factory->define(\TecnoAgenda\Entities\Pessoa::class, function(\Faker\Generator $faker){
    return [
        'nome'=>$faker->name,
        'apelido'=>$faker->firstname,
        'sexo'=>$faker->randomElement(['M', 'F'])
    ];
});

$factory->define(\TecnoAgenda\Entities\Telefone::class, function(\Faker\Generator $faker){
    return [
        'descrição'=>$faker->randomElement(['Residencial', 'Comercial', 'Celular', 'Recado']),
        'codpaís'=>$faker->optional(0.7, 55)->numberBetween(1, 197),
        'ddd'=>$faker->numberBetween(11, 91),
        'prefixo'=>$faker->randomNumber(4),
        'sufixo'=>$faker->randomNumber(4),
        'pessoa_id'=>$faker->numberBetween(1, 30)
    ];
});