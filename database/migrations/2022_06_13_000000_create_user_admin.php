<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $password = "123456";
        \App\Models\User::factory()->create([
            'name' => 'admin User',
            'email' => 'admin@prueba.app',
            'password' =>  bcrypt($password)
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('peliculas');
    }
};
