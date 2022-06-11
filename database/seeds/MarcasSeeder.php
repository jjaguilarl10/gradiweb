<?php

use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('marcas')->insert(['nombre_marca' => 'Mazda']);
        DB::table('marcas')->insert(['nombre_marca' => 'Chevrolet ']);
        DB::table('marcas')->insert(['nombre_marca' => 'Suzuki ']);
        DB::table('marcas')->insert(['nombre_marca' => 'Kia ']);
        DB::table('marcas')->insert(['nombre_marca' => 'Renault ']);
        DB::table('marcas')->insert(['nombre_marca' => 'Foton']);
        DB::table('marcas')->insert(['nombre_marca' => 'BYD']);
        DB::table('marcas')->insert(['nombre_marca' => 'JAC']);
        DB::table('marcas')->insert(['nombre_marca' => 'Audi']);
    }
}
