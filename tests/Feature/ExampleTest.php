<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_urls_1()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_urls_2()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }
    public function test_urls_3()
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
    }
    public function test_urls_4()
    {
        $response = $this->get('/price');
        $response->assertStatus(200);
    }
    public function test_urls_5()
    {
        $response = $this->get('/gallery');
        $response->assertStatus(200);
    }
    public function test_urls_6()
    {
        $response = $this->get('/contacts');
        $response->assertStatus(200);
    }
}
