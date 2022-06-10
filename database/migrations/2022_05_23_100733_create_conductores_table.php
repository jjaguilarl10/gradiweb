<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConductoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conductores', function (Blueprint $table) {
            $table->id();
            $table->String('identificacion',20);
            $table->String('primer_nombre',60);
            $table->String('segundo_nombre',60);
            $table->String('apellidos',100);
            $table->String('direccion',100);
            $table->String('telefono',20);
            $table->String('ciudad',20);
            $table->timestamps();
            /*
            $table->foreignId('conductor_id')
                ->references('id')
                ->on('conductores');
                */
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conductores');
    }
}
