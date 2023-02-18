<?php

# AQUI SERA USADO PARA O PROJETO

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
        #criar tabela
        Schema::create('events', function (Blueprint $table) {

            #criar categorias de tabelas no database
            $table->id();
            $table->timestamps();
            $table -> string('title');  #titulo, poucos caracteres
            $table -> text('description');  #descricao, muitos caracteres
            $table -> string('city');
            $table -> boolean('private'); #verificar se é privado ou não
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
