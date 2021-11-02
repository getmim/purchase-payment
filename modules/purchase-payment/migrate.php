<?php

return [
    'PurchasePayment\\Model\\PurchasePayment' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'purchase' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'status' => [
                'comment' => '0 Canceled, 1 Pending, 2 Paid',
                'type' => 'TINYINT',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false,
                    'default' => 1
                ],
                'index' => 3000
            ],
            'fee' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 4000
            ],
            'total' => [
                'type' => 'DOUBLE',
                'length' => '13,2',
                'attrs' => [
                    'unsigned' => true,
                    'null' => false
                ],
                'index' => 5000
            ],
            'method' => [
                'comment' => '{type, bank:{name,code,account:{name,number}}, meta: {callback,...}}',
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 4000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ]
];
