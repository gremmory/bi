<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HistorialTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->visit('/')
            ->type('80938', 'cod')
            ->type('josef', 'user')
            ->type('1234', 'pass')
            ->press('btn_ingresar')
            ->seePageIs('usuario')
            ->see('Bienvenido, Jose Fuentes')
            ->click('historial')
            ->seePageIs('usuario/historial')
            ->see('Jose Fuentes')
            ->see('Historial de Transacciones');
    }
}
