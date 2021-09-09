<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePrfProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prf_profiles', function (Blueprint $table) {
            $table->increments('prf_id');
            $table->string('prf_first_name',50);
            $table->string('prf_last_name',50);
            $table->string('prf_email',30)->nullable(); 
            $table->string('prf_password', 70)->nullable();
            $table->string('prf_phone', 20)->nullable();
            $table->string('prf_adress',50)->nullable();
            $table->integer('ville_id',11)->nullable();
            $table->integer('prf_isValidated',11)->nullable();
            $table->dateTime('prf_date_naissance')->nullable(); 
            $table->string('prf_sexe', 1)->nullable();
            $table->string('prf_NumSIRN', 40)->nullable();
            $table->string('prf_nameofcompany', 70)->nullable();
            $table->string('prf_siteweb', 70)->nullable();
            $table->string('prf_activity', 20)->nullable();
            $table->string('prf_logo', 70)->default('/image/default.jpg');
            $table->string('id_typeuser', 255);
            
            
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
        Schema::dropIfExists('prf_profiles');
    }
}
