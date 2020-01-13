<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Registros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            
            $table->timestamps();
			$table->softDeletes();
			$table->bigIncrements('id');
			$table->bigInteger('registro_tipo_id')->nullable();
			$table->string('titulo', 150)->nullable();
			$table->text('detalle')->nullable();
			$table->double('importe')->nullable();
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
