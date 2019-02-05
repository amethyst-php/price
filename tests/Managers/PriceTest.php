<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\PriceFaker;
use Railken\Amethyst\Managers\PriceManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class PriceTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = PriceManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = PriceFaker::class;
}
