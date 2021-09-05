<?php

namespace Tests\Feature;

use App\Models\Coordinator;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class CoordinatorEmailVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_email_verification_screen_can_be_rendered()
    {
        $coordinator = Coordinator::factory()->create([
            'email_verified_at' => null,
        ]);

        $response = $this->actingAs($coordinator, 'coordinator')->get('coordinator/verify-email');

        $response->assertStatus(200);
    }

    public function test_email_can_be_verified()
    {
        Event::fake();

        $coordinator = Coordinator::factory()->create([
            'email_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'coordinator.verification.verify',
            now()->addMinutes(60),
            ['id' => $coordinator->id, 'hash' => sha1($coordinator->email)]
        );

        $response = $this->actingAs($coordinator, 'coordinator')->get($verificationUrl);

        Event::assertDispatched(Verified::class);
        $this->assertTrue($coordinator->fresh()->hasVerifiedEmail());
        $response->assertRedirect(route('coordinator.dashboard').'?verified=1');
    }

    public function test_email_is_not_verified_with_invalid_hash()
    {
        $coordinator = Coordinator::factory()->create([
            'email_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'coordinator.verification.verify',
            now()->addMinutes(60),
            ['id' => $coordinator->id, 'hash' => sha1('wrong-email')]
        );

        $this->actingAs($coordinator, 'coordinator')->get($verificationUrl);

        $this->assertFalse($coordinator->fresh()->hasVerifiedEmail());
    }
}
