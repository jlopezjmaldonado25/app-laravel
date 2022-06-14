<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $password = "123456";
        \App\Models\User::factory()->create([
            'name' => 'admin User',
            'email' => 'admin@prueba.app',
            'password' =>  bcrypt($password)
        ]);
    }
}
