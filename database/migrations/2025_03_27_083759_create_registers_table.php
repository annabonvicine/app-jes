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
        Schema::create('registers', function (Blueprint $table) {
            //Dados Pessoais
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cpf')->unique();
            $table->string('date_of_birth');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('ddd_phone');

            //Endereço
            $table->string('addres_street');
            $table->string('addres_number');
            $table->string('village');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');

            //Data de criação
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
