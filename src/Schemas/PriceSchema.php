<?php

namespace Amethyst\Schemas;

use Amethyst\Managers\ConsumeRuleManager;
use Amethyst\Managers\PriceRuleManager;
use Amethyst\Managers\TargetManager;
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
            Attributes\TextAttribute::make('code'),
            Attributes\BelongsToAttribute::make('price_rule_id')
                ->setRelationName('price_rule')
                ->setRelationManager(PriceRuleManager::class),
            Attributes\BelongsToAttribute::make('consume_rule_id')
                ->setRelationName('consume_rule')
                ->setRelationManager(ConsumeRuleManager::class),
            Attributes\BelongsToAttribute::make('target_id')
                ->setRelationName('target')
                ->setRelationManager(TargetManager::class),
            Attributes\NumberAttribute::make('price')->setRequired(true),
            \Amethyst\Core\Attributes\DataNameAttribute::make('priceable_type'),
            Attributes\MorphToAttribute::make('priceable_id')
                ->setRelationKey('priceable_type')
                ->setRelationName('priceable')
                ->setRelations(app('amethyst')->getDataManagers()),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
