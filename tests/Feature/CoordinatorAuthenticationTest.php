<?php

namespace Tests\Feature;

use App\Models\Coordinator;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CoordinatorAuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('coordinator/login');

        $response->assertStatus(200);
    }

    public function test_coordinators_can_authenticate_using_the_login_screen()
    {
        $coordinator = Coordinator::factory()->create();

        $response = $this->post('coordinator/login', [
            'email' => $coordinator->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated('coordinator');
        $response->assertRedirect(route('coordinator.dashboard'));
    }

    public function test_coordinators_can_not_authenticate_with_invalid_password()
    {
        $coordinator = Coordinator::factory()->create();

        $this->post('coordinator/login', [
            'email' => $coordinator->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest('coordinator');
    }
}
