<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testRegistrasi(): void
    {
        $this->browse(function (Browser $browser) {
             $browser->visit(url:'/register')
                    ->assertPathIs(path: '/register')
                    ->type(field: 'name', value: 'diva dusk')
                    ->type(field: 'email', value: 'divalunetta@gmail.com')
                    ->type(field: 'password', value: '123')
                    ->type(field: 'password_confirmation', value: '123')
                    ->press('REGISTER')
                    ->assertPathIs(path:'/dashboard');
        });
    }
}
