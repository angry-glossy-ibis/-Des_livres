<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Entry;

class EntryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        //$this->assertTrue(true);
        $entry = factory(App\Entry::class)->create();
        $this->assertDatabaseHas($entry->getTable(), $entry->toArray());
    }
}
