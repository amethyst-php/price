<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Managers\PriceRuleManager;
use Railken\Amethyst\Managers\TargetManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class PriceSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        $priceableConfig = Config::get('amethyst.price.data.price.attributes.priceable.options');

        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('price_rule_id')
                ->setRelationName('price_rule')
                ->setRelationManager(PriceRuleManager::class),
            Attributes\BelongsToAttribute::make('target_id')
                ->setRelationName('target')
                ->setRelationManager(TargetManager::class)
                ->setRequired(true),
            Attributes\NumberAttribute::make('price')->setRequired(true),
            Attributes\EnumAttribute::make('priceable_type', array_keys($priceableConfig))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('priceable_id')
                ->setRelationKey('priceable_type')
                ->setRelationName('priceable')
                ->setRelations($priceableConfig)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
