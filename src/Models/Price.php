<?php

namespace Railken\Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Railken\Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;

class Price extends Model implements EntityContract
{
    use SoftDeletes;
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.price.data.price');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function price_rule(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.price-rule.data.price-rule.model'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function consume_rule(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.consume-rule.data.consume-rule.model'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function target(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.target.data.target.model'));
    }

    /**
     * Get all of the owning issuable models.
     */
    public function priceable(): MorphTo
    {
        return $this->morphTo();
    }

    public function calculate(array $vars = [])
    {
        return $this->price_rule ? $this->price_rule->calculate($this->price, $vars) : $this->price;
    }
}
