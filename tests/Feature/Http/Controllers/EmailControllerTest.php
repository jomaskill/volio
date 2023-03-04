<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EmailControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_page(): void
    {
        $response = $this->get(route('email.index'));

        $response->assertStatus(200);
    }
}
