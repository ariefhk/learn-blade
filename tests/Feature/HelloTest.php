<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testHello(): void
    {
        $response = $this->get('/hello');

        $response->assertSeeText("Laravel");
    }

    public function testWord(): void
    {
        $response = $this->get('/word');

        $response->assertSeeText("Arief likes Laravel");
    }

    public function testComment(): void
    {
        $response = $this->view('comment');

        $response->assertSeeText("Comment");
        $response->assertDontSeeText("Hi");
    }
}
