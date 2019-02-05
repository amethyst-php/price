<?php

return [
    'table'      => 'amethyst_prices',
    'comment'    => 'Price',
    'model'      => Railken\Amethyst\Models\Price::class,
    'schema'     => Railken\Amethyst\Schemas\PriceSchema::class,
    'repository' => Railken\Amethyst\Repositories\PriceRepository::class,
    'serializer' => Railken\Amethyst\Serializers\PriceSerializer::class,
    'validator'  => Railken\Amethyst\Validators\PriceValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\PriceAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\PriceFaker::class,
    'manager'    => Railken\Amethyst\Managers\PriceManager::class,
    'attributes' => [
        'priceable' => [
            'options' => [
                Railken\Amethyst\Models\Foo::class => Railken\Amethyst\Managers\FooManager::class,
            ],
        ],
    ],
];
