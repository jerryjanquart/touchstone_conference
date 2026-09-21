<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivestreamLoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $usernameMatches = hash_equals(
            (string) config('livestream.username'),
            $credentials['username']
        );

        $passwordMatches = hash_equals(
            (string) config('livestream.password'),
            $credentials['password']
        );

        if (! $usernameMatches || ! $passwordMatches) {
            return back()
                ->withErrors([
                    'username' => 'The username or password is incorrect.',
                ])
                ->onlyInput('username');
        }

        $request->session()->regenerate();

        $request->session()->put('livestream_authenticated', true);

        return redirect()->intended('/watch');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('livestream_authenticated');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('livestream.login');
    }
}