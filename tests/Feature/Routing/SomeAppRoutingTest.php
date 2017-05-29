<?php

namespace Tests\Feature\Routing;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SomeAppRoutingTest extends TestCase
{
    /**
     * @group Routing
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('some');

        $response->assertStatus(200);
        $response->assertSee('Some');
    }
}
