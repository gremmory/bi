<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AcreditarTest extends TestCase
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
            ->click('credito')
            ->seePageIs('usuario/credito')
            ->see('ACREDITAR SALDO')
            ->type('1006607499', 'cuenta')
            ->type('0', 'monto')
            ->type('Ingreso Prueba 0', 'desc')
            ->press('btn_realizar')
            ->see('CREDITO EXITOSO: Se ha acreditado correctamente el monto indicado');
    }
}
