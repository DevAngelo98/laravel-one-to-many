<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
// Includere model di riferimento
use App\Employee;
$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker -> name,
        'lastname' => $faker -> lastname,
        'birth_year' => $faker -> year
    ];
});
