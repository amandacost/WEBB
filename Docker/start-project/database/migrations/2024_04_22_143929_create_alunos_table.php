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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->sting('nome');
            $table->varchar('cpf');
            $table->string('email');
            $table->varchar('password');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('turma_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('turma_id')->references('id')->on('turmas');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
