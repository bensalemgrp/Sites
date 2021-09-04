<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email');
            $table->string('TypeUser');
            $table->string('password');
            $table->string('prenom');
            $table->date('dateN');
            $table->string('Sexe');
            $table->string('activiter');
            $table->string('pays');
            $table->string('addresse');
            $table->string('telephone');
            $table->string('NomEntreprise');
            $table->string('NumeroSiren');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
