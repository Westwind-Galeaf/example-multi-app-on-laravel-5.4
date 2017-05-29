<?php

namespace Tests\Feature\Routing;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiAppRoutingTest extends TestCase
{
    /**
     * @group Routing
     * @return void
     */
    public function testCheckRoutes()
    {
        $response = $this->get('api');

        $response->assertStatus(200);
        $response->assertSee('Api');
    }
}
