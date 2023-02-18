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
        #vai adicionar uma nova categoria a tabela (adiciona um novo elemento a tabela existente)
        Schema::table('products', function (Blueprint $table) {
            $table -> string('category',/*limitar a quantidade de caracteres passados: */ 100); #criar tabela de caracteres
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        #remove a alteracao feita
        Schema::table('products', function (Blueprint $table) {
            $table -> dropColumn('category'); #remover tabela de caracteres
        });
    }
};
