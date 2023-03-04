<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_example(): void
    {
        $response = $this->get(route('person.index'));

        $response->assertStatus(200);
    }
}
