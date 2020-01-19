<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Price                 newEntity()
 * @method \Amethyst\Schemas\PriceSchema          getSchema()
 * @method \Amethyst\Repositories\PriceRepository getRepository()
 * @method \Amethyst\Serializers\PriceSerializer  getSerializer()
 * @method \Amethyst\Validators\PriceValidator    getValidator()
 * @method \Amethyst\Authorizers\PriceAuthorizer  getAuthorizer()
 */
class PriceManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.price.data.price';
}
