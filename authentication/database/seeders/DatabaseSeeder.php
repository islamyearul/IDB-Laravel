<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // \App\Models\User::factory(10)->create(); rtrim($faker->sentence(rand(5, 7)), "."),

        DB::table('users')->insert([
            //'name' => $faker->Str::random(10),
            'name' =>rtrim($faker->sentence(rand(5, 7)), "."),
            'email' => $faker->rand(10).'@gmail.com',
            'password' => $faker->Hash::make('password'),
        ]);
    }
}
