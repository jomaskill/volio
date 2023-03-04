<?php

namespace Tests\Feature\Http\Controllers;

use App\Mail\NewPerson;
use App\Models\Email;
use App\Models\Person;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class PersonControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_page(): void
    {
        $this->get(route('person.index'))
            ->assertStatus(200)
            ->assertViewIs('pages.person.index')
            ->assertViewHas('people', Person::paginate(10));
    }

    public function test_create_page(): void
    {
        $this->get(route('person.create'))
            ->assertStatus(200)
            ->assertViewIs('pages.person.create');
    }

    public function test_store(): void
    {
        Mail::fake();

        $params = Person::factory()->make()->toArray();
        $params['body'] = 'a body';

        $this->post(route('person.store'), $params)
            ->assertRedirect(route('person.index'));

        Mail::assertSent(
            NewPerson::class,
            fn (NewPerson $person) => $person->content === $params['body']
            && $person->to === [['name' => null, 'address' => $params['email']]]
        );

        $this->assertDatabaseHas(Person::class, [
            'name' => $params['name'],
            'email' => $params['email'],
            'phone' => $params['phone'],
        ]);

        $this->assertDatabaseHas(Email::class, [
            'to' => $params['email'],
            'body' => $params['body'],
        ]);
    }

    public function test_fields_should_be_required_on_store(): void
    {
        $this->post(route('person.store'), [])
            ->assertInvalid([
                'name' => __('validation.required', ['attribute' => 'Name']),
                'phone' => __('validation.required', ['attribute' => 'Phone Number']),
                'email' => __('validation.required', ['attribute' => 'Email']),
                'body' => __('validation.required', ['attribute' => 'Email Content']),
            ]);
    }

    public function test_fields_should_have_a_max_on_store(): void
    {
        $this->post(route('person.store'), [
            'name' => str_repeat('*', 256),
            'phone' => str_repeat('*', 18)]
        )
            ->assertInvalid([
                'name' => __('validation.max.string', ['attribute' => 'Name', 'max' => 255]),
                'phone' => __('validation.max.string', ['attribute' => 'Phone Number', 'max' => 17]),
            ]);
    }

    public function test_email_should_be_unique_on_store(): void
    {
        $person = Person::factory()->create(['email' => 'test@test.com']);

        $this->post(route('person.store'), ['email' => $person->email])
            ->assertInvalid([
                'email' => __('validation.unique', ['attribute' => 'Email']),
            ]);
    }
}
