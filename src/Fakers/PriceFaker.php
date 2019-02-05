<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class PriceFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('price_rule', PriceRuleFaker::make()->parameters()->toArray());
        $bag->set('target', TargetFaker::make()->parameters()->toArray());
        $bag->set('price', 10.22);
        $bag->set('priceable_type', \Railken\Amethyst\Models\Foo::class);
        $bag->set('priceable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
