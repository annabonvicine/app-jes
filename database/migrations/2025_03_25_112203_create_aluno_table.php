<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aluno', function (Blueprint $table) {
            //dados dos alunos
            $table->id('id_aluno');
            // $table->foreign('id_aluno')->references('id')->on('aluno');
            $table->string('nome');
            $table->string('time');
            $table->string('genero');

            //data de criação e edição
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno');
    }
};
