<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SaldoTest extends TestCase
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
            ->click('saldo')
            ->seePageIs('usuario/saldo')
            ->see('SALDO EN CUENTA ACTIVA')
            ->see('Jose Fuentes');
    }
}
