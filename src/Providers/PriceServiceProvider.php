<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;

class PriceServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Railken\Amethyst\Providers\PriceRuleServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\TargetServiceProvider::class);
    }
}
