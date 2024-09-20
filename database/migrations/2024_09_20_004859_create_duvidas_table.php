<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuvidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duvidas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf', 11);
            $table->string('email');
            $table->string('sistema');
            $table->string('perfil');
            $table->text('duvida');
            $table->json('docs')->nullable(); 
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
        Schema::dropIfExists('duvidas');
    }
}
