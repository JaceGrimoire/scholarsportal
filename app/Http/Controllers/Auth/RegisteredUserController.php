<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\StudentScholarship;
use App\Models\PendingScholar;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'suffix' => 'nullable|string|max:255',
            'student_id' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'suffix' => $request->suffix,
            'student_id' => $request->student_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

       PendingScholar::create([
            'student_id' => $request->student_id,
        ]);

        StudentScholarship::create([
            'student_id' => $request->student_id,
        ]);

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
