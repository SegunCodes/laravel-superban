<?php

return [
    'default' => 'fixed-window',

    'stores' => [
        'fixed-window' => [
            'driver' => 'redis', // or 'database' or other supported drivers
            'decay_on_failure' => 1,
            'decay_on_success' => 0,
            'attempts' => 5,
            'minutes' => 1,
        ],
    ],
];
