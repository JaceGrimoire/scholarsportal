<?php

namespace App\Http\Controllers\Coordinator\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated coordinator's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request)
    {
        if ($request->user('coordinator')->hasVerifiedEmail()) {
            return redirect()->intended(route('coordinator.dashboard').'?verified=1');
        }

        if ($request->user('coordinator')->markEmailAsVerified()) {
            event(new Verified($request->user('coordinator')));
        }

        return redirect()->intended(route('coordinator.dashboard').'?verified=1');
    }
}
