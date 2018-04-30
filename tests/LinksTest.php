<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LinksTest extends TestCase
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

            ->click('Perfil')
            ->seePageIs('usuario')
            ->see('Bienvenido, Jose Fuentes')

            ->click('Saldo.')
            ->seePageIs('usuario/saldo')
            ->see('SALDO EN CUENTA ACTIVA')

            ->click('Acreditar Saldo')
            ->seePageIs('usuario/credito')
            ->see('ACREDITAR SALDO')

            ->click('Debitar Saldo')
            ->seePageIs('usuario/debito')
            ->see('DEBITAR SALDO')

            ->click('Transferencia')
            ->seePageIs('usuario/transferencia')
            ->see('TRANSFERENCIA DE SALDO')

            ->click('Historial')
            ->seePageIs('usuario/historial')
            ->see('Historial de Transacciones');
    }
}
