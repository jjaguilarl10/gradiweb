<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PropietariosModuleTest extends TestCase{
    /**
     * @test
     */
    function propietarios_listar(){
        $this->get('/intranet/propietarios/listar')
        ->assertStatus(200);
    }

   

}
