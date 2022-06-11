<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropietariosTable extends Migration{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('propietarios', function (Blueprint $table) {
            $table->id();
            $table->String('identificacion',20);
            $table->String('primer_nombre',60);
            $table->String('segundo_nombre',60)->nullable();
            $table->String('apellidos',100);
            $table->String('direccion',160)->nullable();
            $table->String('celular',20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('propietarios');
    }
}
