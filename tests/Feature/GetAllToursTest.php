<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetAllToursTest extends TestCase
{
    private $IDs = [];

    protected function setUp() : void
    {
        parent::setUp();
        //$response = $this->postJson('http://localhost/api/tours', ['start' => 0, "end" => "price"]);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->json('GET', 'http://localhost/api/tours');
        $response->assertStatus(200);
    }

    protected function tearDown() : void
    {
    }
}
