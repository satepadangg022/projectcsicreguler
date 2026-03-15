<?php

return [

    'paths' => ['api/*'], // hanya aktif di endpoint API

    'allowed_methods' => ['*'], // semua metode HTTP diizinkan (GET, POST, dst)

    'allowed_origins' => ['http://192.168.56.1:8000/'], // GANTI dengan domain frontend kamu

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
