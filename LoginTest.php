<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class testLoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group login
     */
    public function testLogin(): void
    {
        $this->browse(function (Browser $browser) {
                $browser->visit(url:'/')
                    ->assertSee(text: 'Enterprise Application Development')
                    ->clickLink(link: 'Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'divalunetta@gmail.com')
                    ->type(field: 'password', value: '123')
                    ->press(button:'LOG IN') 
                    ->assertPathIs(path:'/dashboard');
        });
    }
}
