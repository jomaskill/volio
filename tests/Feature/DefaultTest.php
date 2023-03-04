<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DefaultTest extends TestCase
{
    public function test_the_application_redirects_to_person_index(): void
    {
        $response = $this->get('/');

        $response->assertRedirect(route('person.index'));
    }
}
