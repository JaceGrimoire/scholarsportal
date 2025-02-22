<?php

namespace Tests\Feature;

use App\Models\Coordinator;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class CoordinatorPasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_reset_password_link_screen_can_be_rendered()
    {
        $response = $this->get('coordinator/forgot-password');

        $response->assertStatus(200);
    }

    public function test_reset_password_link_can_be_requested()
    {
        Notification::fake();

        $coordinator = Coordinator::factory()->create();

        $response = $this->post('coordinator/forgot-password', [
            'email' => $coordinator->email,
        ]);

        Notification::assertSentTo($coordinator, ResetPassword::class);
    }

    public function test_reset_password_screen_can_be_rendered()
    {
        Notification::fake();

        $coordinator = Coordinator::factory()->create();

        $response = $this->post('coordinator/forgot-password', [
            'email' => $coordinator->email,
        ]);

        Notification::assertSentTo($coordinator, ResetPassword::class, function ($notification) {
            $response = $this->get('coordinator/reset-password/'.$notification->token);

            $response->assertStatus(200);

            return true;
        });
    }

    public function test_password_can_be_reset_with_valid_token()
    {
        Notification::fake();

        $coordinator = Coordinator::factory()->create();

        $response = $this->post('coordinator/forgot-password', [
            'email' => $coordinator->email,
        ]);

        Notification::assertSentTo($coordinator, ResetPassword::class, function ($notification) use ($coordinator) {
            $response = $this->post('coordinator/reset-password', [
                'token' => $notification->token,
                'email' => $coordinator->email,
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);

            $response->assertSessionHasNoErrors();

            return true;
        });
    }
}
