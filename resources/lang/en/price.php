<?php

return [
    'name' => 'Price',
    'description' => 'Price',
    'attributes' => [
        'consume_rule_id' => [
            'label' => 'Consume Rule',
            'description' => 'Indicate how this should be consumed'
        ],
        'price_rule_id' => [
            'label' => 'Price Rule',
            'description' => 'Indicate how this should be calculated'
        ],
        'target_id' => [
            'label' => 'Target',
            'description' => 'Indicate to whom this price is focused'
        ],
        'price' => [
            'label' => 'Price',
            'description' => 'Price (e.g. 1000.30)'
        ]
    ]
];