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
        Schema::create('juicios', function (Blueprint $table) {
            $table->id();
            $table->string('num_expediente');
            $table->date('inicio_juicio')->nullable();
            $table->foreignId('acto_reclamado_id')->constrained('acto_reclamado')->cascadeOnDelete();
            $table->foreignId('demandado_id')->constrained('autoridad_demandada')->cascadeOnDelete();
            $table->string('demandante');
            $table->foreignId('estado_juicio_id')->constrained('estatus_juicio')->cascadeOnDelete();
            $table->foreignId('juzgado_tribunal_id')->constrained('juzgados')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juicios');
    }
};
