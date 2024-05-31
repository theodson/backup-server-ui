<?php

return [

    'source' => [
        'cron-expression' => env("SOURCE_CRON_EXPRESSION", '0 0 */12 * * *') # every 12 hours
    ]
];
