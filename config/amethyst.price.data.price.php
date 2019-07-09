<?php

return [
    'table'      => 'amethyst_prices',
    'comment'    => 'Price',
    'model'      => Amethyst\Models\Price::class,
    'schema'     => Amethyst\Schemas\PriceSchema::class,
    'repository' => Amethyst\Repositories\PriceRepository::class,
    'serializer' => Amethyst\Serializers\PriceSerializer::class,
    'validator'  => Amethyst\Validators\PriceValidator::class,
    'authorizer' => Amethyst\Authorizers\PriceAuthorizer::class,
    'faker'      => Amethyst\Fakers\PriceFaker::class,
    'manager'    => Amethyst\Managers\PriceManager::class,
    'attributes' => [
        'priceable' => [
            'options' => [],
        ],
    ],
];
