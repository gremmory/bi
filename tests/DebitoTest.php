<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DebitoTest extends TestCase
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
            ->click('debito')
            ->seePageIs('usuario/debito')
            ->see('DEBITAR SALDO')
            ->type('1006607499', 'cuenta')
            ->type('0', 'monto')
            ->type('Ingreso Prueba 0', 'desc')
            ->press('btn_realizar')
            ->see('DEBITO EXITOSO: Se ha debitado correctamente el monto indicado');// salida de pruba para debito test
    }
}
