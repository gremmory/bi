<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        /*
        $this->visit('/')
             ->see('Se parte del futuro.');
        */
        $this->visit('/')
            ->type('80938', 'cod')
            ->type('josef', 'user')
            ->type('1234', 'pass')
            ->press('btn_ingresar')
            ->seePageIs('usuario')
            ->see('Bienvenido, Jose Fuentes');//verifica que se haya ingresado a esta pagina
    }
}
//usuario/saldo