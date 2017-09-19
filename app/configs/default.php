<?php

return [

    'application' => [
        'title' => "Marcello's",
        'description' => 'Esse um aplicativo de minha autoria!',
        'baseUri' => '/',
        'viewsDir' => __DIR__ . '/../views/',
    ],

    'authentication' => [
        'secret' => 'this_should_be_changed',
        'expirationTime' => 86400 * 7, // One week till token expires
    ]
];
