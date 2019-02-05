<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class PriceAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'price.create',
        Tokens::PERMISSION_UPDATE => 'price.update',
        Tokens::PERMISSION_SHOW   => 'price.show',
        Tokens::PERMISSION_REMOVE => 'price.remove',
    ];
}
