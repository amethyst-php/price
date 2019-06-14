<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Railken\Amethyst\Common\CommonServiceProvider;

class PriceServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Railken\Amethyst\Providers\PriceRuleServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\ConsumeRuleServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\TargetServiceProvider::class);
    }

    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }
}
