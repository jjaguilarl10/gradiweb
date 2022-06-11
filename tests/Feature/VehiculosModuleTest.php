<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VehiculosModuleTest extends TestCase{
    /**
     * A basic feature test example.
     *
     * @test
     */
    function vehiculos_listar(){
        $this->get('/intranet/vehiculos/listar')
        ->assertStatus(200);
    }
    
}
