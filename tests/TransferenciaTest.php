<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TransferenciaTest extends TestCase
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
            ->click('transferencia')
            ->seePageIs('usuario/transferencia')
            ->see('TRANSFERENCIA DE SALDO')
            ->type('1297662835', 'cuenta')
            ->type('0', 'monto')
            ->press('btn_realizar')
            ->see('TRANSFERENCIA EXITOSA: Se ha transferido correctamente el monto indicado');
    }
}
