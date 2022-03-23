<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TopicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_see_url()
    {
        $response = $this->get('/index.html');

        $response->assertStatus(200);
    }
    public function  test_see_url_2()
    {
        $response = $this->get('/index.html#torles');

        $response->assertStatus(200);
    }
    public function  test_see_url_3()
    {
        $response = $this->get('/index.html#rolunk');

        $response->assertStatus(200);
    }

}
