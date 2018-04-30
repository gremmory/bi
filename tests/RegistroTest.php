<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegistroTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        
        $this->visit('/')
            ->click('registro')
            ->type('Prueba', 'name')
            ->type('prueba', 'user')
            ->type('prueba@correo.com', 'correo')
            ->type('1234', 'pass')
            ->type('1234', 'pass2')
            ->press('Registrar')
            //->see('REGISTRO EXITOSO')
<<<<<<< HEAD
            ->see('ERROR: El usuario ingresado ya se encuentra registrado.');
=======
            ->see('ERROR: El usuario ingresado ya se encuentra registrado1.');
>>>>>>> developer
    }
}
