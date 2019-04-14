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
        $bag->set('consume_rule', ConsumeRuleFaker::make()->parameters()->toArray());
        $bag->set('target', TargetFaker::make()->parameters()->toArray());
        $bag->set('price', 10.22);
        $bag->set('priceable_type', 'foo');
        $bag->set('priceable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
