<?php

return [
    'username' => env('LIVESTREAM_NAME'),
    'password' => env('LIVESTREAM_PASSWORD'),

    'timezone' => 'America/Chicago',

    'sessions' => [
        [
            'title' => 'Session I',
            'starts_at' => '2026-09-24 18:30',
            'video_id' => '0CikLEWBU98',
            'speakers' => [
                'budziszewski',
                'warren',
            ],
            'description' => "Thursday Evening, September 24, 2026",
        ],
        [
            'title' => 'Session II',
            'starts_at' => '2026-09-25 08:45',
            'video_id' => 'BIYgiQQDBiQ',
            'speakers' => [
                'trueman',
                'deneen',
                'birzer',
            ],
            'description' => "Friday Morning, September 25, 2026",
        ],
        [
            'title' => 'Session III',
            'starts_at' => '2026-09-25 13:45',
            'video_id' => 'wTXbbON9FbA',
            'speakers' => [
                'trueman',
                'deneen',
                'dreher',
                'wiley',
            ],
            'description' => "Friday Afternoon, September 25, 2026",
        ],
        [
            'title' => 'Session IV',
            'starts_at' => '2026-09-25 18:45',
            'video_id' => 'fgfkpY_zoSM',
            'speakers' => [
                'gress',
            ],
            'description' => "Friday Evening, September 25, 2026",
        ],
        [
            'title' => 'Session V',
            'starts_at' => '2026-09-26 08:45',
            'video_id' => 'Sb9WajMStiY',
            'speakers' => [
                'macleod',
                'dreher',
            ],
            'description' => "Saturday Morning, September 26, 2026",
        ],
    ],
];