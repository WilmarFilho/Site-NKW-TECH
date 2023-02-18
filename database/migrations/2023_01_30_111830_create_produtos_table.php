<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tipo', 20);
            $table->string('nome', 40);
            $table->string('tamanho', 8)->nullable();
            $table->float('preço');
            $table->string('marca', 20);
            $table->string('modelo', 30)->nullable();
            $table->string('socket', 15)->nullable();
            $table->integer('geracao')->nullable();
            $table->integer('ddr')->nullable();
            $table->integer('velocidadeRam')->nullable();
            $table->integer('tamanhoRam')->nullable();
            $table->boolean('graficoIntegrado')->nullable();
            $table->integer('Nnucleos')->nullable();
            $table->integer('Nthreads')->nullable();
            $table->float('Nfrequencia', 2)->nullable();
            $table->string('NgraficoIntegrado', 15)->nullable();
            $table->integer('frequenciaPlacaVideo')->nullable();
            $table->integer('MemoriaPlacaVideo')->nullable();
            $table->integer('TipoMemoriaPlacaVideo')->nullable();
            $table->integer('PotenciaPlacaVideo')->nullable();
            $table->string('capacidadeArmazenamento', 10)->nullable();
            $table->string('potencia', 10)->nullable();
            $table->string('descricao', 50);
            $table->string('foto', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
