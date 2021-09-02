<?php

namespace Tests\Feature;

use App\Models\Coordinator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CoordinatorPasswordConfirmationTest extends TestCase
{
    use RefreshDatabase;

    public function test_confirm_password_screen_can_be_rendered()
    {
        $coordinator = Coordinator::factory()->create();

        $response = $this->actingAs($coordinator, 'coordinator')->get('coordinator/confirm-password');

        $response->assertStatus(200);
    }

    public function test_password_can_be_confirmed()
    {
        $coordinator = Coordinator::factory()->create();

        $response = $this->actingAs($coordinator, 'coordinator')->post('coordinator/confirm-password', [
            'password' => 'password',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
    }

    public function test_password_is_not_confirmed_with_invalid_password()
    {
        $coordinator = Coordinator::factory()->create();

        $response = $this->actingAs($coordinator, 'coordinator')->post('coordinator/confirm-password', [
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors();
    }
}
