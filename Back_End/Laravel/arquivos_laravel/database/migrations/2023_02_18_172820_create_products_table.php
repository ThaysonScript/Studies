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
        #vai criar uma tabela
        Schema::create('products', function (Blueprint $table) {
            #criar tipo de dados no database

            #sempre vai ser passado o tipo de dado para o database
            $table->id();
            $table -> integer('qty'); #numero/quantidade
            $table -> text('description'); #texto muito grande
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
