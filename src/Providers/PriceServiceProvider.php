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
        $this->app->register(\Railken\Amethyst\Providers\ConsumeRuleServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\TargetServiceProvider::class);
    }

    public function boot()
    {
        \Illuminate\Database\Eloquent\Builder::macro('price', function () {
            return $this->getModel()->morphOne(\Railken\Amethyst\Models\Price::class, 'priceable');
        });
        \Illuminate\Database\Eloquent\Builder::macro('prices', function () {
            return $this->getModel()->morphMany(\Railken\Amethyst\Models\Price::class, 'priceable');
        });
    }
}
