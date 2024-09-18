<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('formulario_duvidas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->enum('sistema', ['Sinfralog', 'Diário de Obras', 'Fiscalização', 'Outros']);
            $table->enum('perfil', ['Fiscal', 'Responsável Técnico', 'Supervisor(a)', 'Outros']);
            $table->text('duvida');
            $table->text('upload_link')->nullable();
            $table->timestamps();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulario_duvidas');
    }
};
