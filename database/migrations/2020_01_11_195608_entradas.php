<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Entradas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            
            $table->timestamps();
			$table->softDeletes();
			$table->bigIncrements('id');
			$table->dateTime('ingreso')->nullable();
			$table->string('estado')->nullable();
			$table->string('fotos')->nullable();
			$table->string('observaciones_de_ingreso', 5000)->nullable();
			$table->dateTime('egreso_fecha')->nullable();
			$table->string('egreso_observaciones', 5000)->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entradas');
    }
}
