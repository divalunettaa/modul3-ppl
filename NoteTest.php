<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NoteTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group note
     */
    public function testNote(): void
    {
        $this->browse(function (Browser $browser) {
               $browser->visit('/create-note')
                    ->type('title', 'Catatan')
                    ->type('description')
                    ->press('CREATE');
        });
    }
}
