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
        Schema::create('inspeccions', function (Blueprint $table) {
            $table->id();
            $table->string('inspector_nombre', 150)->nullable();
            $table->string('inspector_email', 255)->nullable();
            $table->string('tipo_vivienda', 100)->nullable();
            $table->string('plantas', 10)->nullable();
            $table->string('zona_construccion', 50)->nullable();
            $table->string('fecha', 50)->nullable();
            $table->string('pais', 100)->nullable();
            $table->string('region', 100)->nullable();
            $table->string('provincia', 100)->nullable();
            $table->string('grado_estudios', 100)->nullable();
            $table->integer('score_electrico')->default(0);
            $table->integer('score_incendio')->default(0);
            $table->integer('score_caidas')->default(0);
            $table->integer('score_humedad')->default(0);
            $table->integer('score_estructural')->default(0);
            $table->integer('score_salud')->default(0);
            $table->integer('score_infantil')->default(0);
            $table->integer('score_total')->default(0);
            $table->string('nivel_riesgo', 50)->nullable();
            $table->json('respuestas_json')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspeccions');
    }
};
