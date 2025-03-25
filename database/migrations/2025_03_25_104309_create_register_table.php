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
        Schema::create('register', function (Blueprint $table) {
            //dados pessoais
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('cpf')->unique();
            $table->string('date_of_birth');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('ddd_phone');
            $table->integer('phone_number');

            //endereço
            $table->string('address_street');
            $table->string('address_number');
            $table->string('village');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('country');

            //data e criação e edição
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register');
    }
};
