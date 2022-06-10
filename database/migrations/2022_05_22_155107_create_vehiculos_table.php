<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){

        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->String('placa',7);
            $table->String('color',60);
            $table->unsignedBigInteger('marca_id')->nullable();
            $table->String('tipo_vehiculo',60);
            $table->unsignedBigInteger('propietario_id');
            $table->timestamps(); 
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('propietario_id')->references('id')->on('propietarios');
            /*$table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            */
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){

        Schema::dropIfExists('vehiculos');
        
    }
}
