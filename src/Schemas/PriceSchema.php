<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\ConsumeRuleManager;
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
        return [
            Attributes\IdAttribute::make(),
            Attributes\BelongsToAttribute::make('price_rule_id')
                ->setRelationName('price_rule')
                ->setRelationManager(PriceRuleManager::class),
            Attributes\BelongsToAttribute::make('consume_rule_id')
                ->setRelationName('consume_rule')
                ->setRelationManager(ConsumeRuleManager::class),
            Attributes\BelongsToAttribute::make('target_id')
                ->setRelationName('target')
                ->setRelationManager(TargetManager::class)
                ->setRequired(true),
            Attributes\NumberAttribute::make('price')->setRequired(true),
            Attributes\EnumAttribute::make('priceable_type', app('amethyst')->getMorphListable('price', 'priceable'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('priceable_id')
                ->setRelationKey('priceable_type')
                ->setRelationName('priceable')
                ->setRelations(app('amethyst')->getMorphRelationable('price', 'priceable'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
