<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

class LivestreamController extends Controller
{
    public function show()
    {
        $timezone = config('livestream.timezone', 'America/Chicago');
        $now = now($timezone);

        $sessions = collect(config('livestream.sessions'))
            ->map(function ($session) use ($timezone) {
                $session['starts_at'] = Carbon::parse(
                    $session['starts_at'],
                    $timezone
                );

                return $session;
            })
            ->sortBy('starts_at')
            ->values();

        // Use the most recently started session.
        // Before the conference begins, display Session I.
        $currentSession = $sessions
            ->filter(fn ($session) => $session['starts_at']->lte($now))
            ->last() ?? $sessions->first();

        $speakerConfig = config('speakers');

        $speakers = collect($currentSession['speakers'])
            ->map(fn ($speakerKey) => $speakerConfig[$speakerKey] ?? null)
            ->filter()
            ->values();

        return view('watch', [
            'currentSession' => $currentSession,
            'speakers' => $speakers,
        ]);
    }

}
