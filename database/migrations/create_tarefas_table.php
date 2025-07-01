<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tarefas', function (Blueprint $table) {//criação da tabela tarefas
            $table->bigIncrements('id');
            $table->string('titulo');//coluna do título
            $table->text('descricao')->nullable();//coluna da descrição
            $table->enum('status',['pendente','concluida'])->default('pendente');//coluna do status da tarefa
            $table->timestamps();
        });

    }
    public function down(): void
    {//remove a tabela caso ela exista
        Schema::dropIfExists('tarefas');
    }
};
