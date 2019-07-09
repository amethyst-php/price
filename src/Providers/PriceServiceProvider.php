<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class PriceServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Amethyst\Providers\PriceRuleServiceProvider::class);
        $this->app->register(\Amethyst\Providers\ConsumeRuleServiceProvider::class);
        $this->app->register(\Amethyst\Providers\TargetServiceProvider::class);
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }
}
