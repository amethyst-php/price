<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\PriceFaker;
use Amethyst\Managers\PriceManager;
use Amethyst\Tests\BaseTest;
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
