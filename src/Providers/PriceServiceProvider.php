<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

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

        \Illuminate\Database\Eloquent\Builder::macro('price', function (): MorphOne {
            return $this->getModel()->morphOne(\Railken\Amethyst\Models\Price::class, 'priceable');
        });
        \Illuminate\Database\Eloquent\Builder::macro('prices', function (): MorphMany {
            return $this->getModel()->morphMany(\Railken\Amethyst\Models\Price::class, 'priceable');
        });
    }
}
