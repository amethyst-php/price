<?php

return [
    'name' => 'Price',
    'description' => 'Price',
    'attributes' => [
        'consume_rule_id' => [
            'label' => 'Regola di Consumo',
            'description' => 'Come dovrebbe essere consumato'
        ],
        'price_rule_id' => [
            'label' => 'Regola di Prezzo',
            'description' => 'Come dovrebbe essere calcolato il prezzo'
        ],
        'target_id' => [
            'label' => 'Obiettivo',
            'description' => 'Verso chi è indicato questo prezzo'
        ],
        'price' => [
            'label' => 'Prezzo',
            'description' => 'Prezzo (e.g. 1000.30)'
        ]
    ]
]