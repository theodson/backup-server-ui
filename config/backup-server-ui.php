<?php

return [

    'source' => [

        //
        // Support default values for Source
        //
        'defaults' => [
            'ssh_port' => env('SOURCE_DEFAULT_SSH_PORT', 22),

            'ssh_user' => env('SOURCE_DEFAULT_SSH_USER', 'vagrant'),

            'cron-expression' => env('SOURCE_DEFAULT_CRON_EXPRESSION', '0 0 */12 * * *'), # every 12 hours

            //
            // expected structure to resolve to ['name'=>'path','name'=>'path']
            //
            'includes' => json_decode(env('SOURCE_DEFAULT_INCLUDES', ''), true),

            //
            // expected structure to resolve to ['name'=>'path','name'=>'path']
            //
            'excludes' => json_decode(env('SOURCE_DEFAULT_EXCLUDES', ''), true),

        ]

    ],

];
