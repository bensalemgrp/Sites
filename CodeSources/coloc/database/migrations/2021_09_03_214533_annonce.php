<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Annonce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce', function (Blueprint $table) {
            $table->increments('id');
            $table->string('typeAnnonce');
            $table->string('categorie');
            $table->string('localisation');
            $table->mediumText('photo')->rollable();
            $table->string('adresse');
            $table->string('GES');
            $table->integer('nombrePiece');
            $table->integer('prix');
            $table->integer('charges');
            $table->integer('caution');
            $table->integer('nombrePersonne');
            $table->date('dateDispo');
            $table->integer('surface');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonce');
    }
}
