<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
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

        \Illuminate\Database\Eloquent\Builder::macro('price', function (): MorphOne {
            return app('amethyst')->createMacroMorphRelation($this, \Railken\Amethyst\Models\Price::class, 'price', 'priceable');
        });

        \Illuminate\Database\Eloquent\Builder::macro('prices', function (): MorphMany {
            return app('amethyst')->createMacroMorphRelation($this, \Railken\Amethyst\Models\Price::class, 'prices', 'priceable');
        });
    }
}
