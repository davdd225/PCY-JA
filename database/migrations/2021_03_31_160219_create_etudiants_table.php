<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
       {
           Schema::create('etudiants', function (Blueprint $table) {
               $table->id();
               $table->string('prenomNom');
               $table->date('dteNaissance');
               $table->string('email');
               $table->string('telephone');
               $table->text('adresse');
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
        Schema::dropIfExists('etudiants');
    }
}
