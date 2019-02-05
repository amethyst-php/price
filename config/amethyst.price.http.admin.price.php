<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\PricesController::class,
    'router'     => [
        'as'     => 'price.',
        'prefix' => '/prices',
    ],
];
