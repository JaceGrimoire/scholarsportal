<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CoordinatorRegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('coordinator/register');

        $response->assertStatus(200);
    }

    public function test_new_coordinators_can_register()
    {
        $response = $this->post('coordinator/register', [
            'name' => 'Test Coordinator',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated('coordinator');
        $response->assertRedirect(route('coordinator.dashboard'));
    }
}
