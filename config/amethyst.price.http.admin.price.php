<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\PricesController::class,
    'router'     => [
        'as'     => 'price.',
        'prefix' => '/prices',
    ],
];
