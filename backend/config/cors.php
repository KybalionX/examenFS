<?php

return [
    'paths' => ['*'],
    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE'],
    'allowed_origins' => ['*'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['X-Custom-Header', 'Upgrade-Insecure-Requests', '*'],
    'exposed_headers' => false,
    'max_age' => false,
    'supports_credentials' => false,
];
