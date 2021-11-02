<?php

return [
    '__name' => 'purchase-payment',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/purchase-payment.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/purchase-payment' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'purchase' => NULL
            ],
            [
                'lib-enum' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'PurchasePayment\\Model' => [
                'type' => 'file',
                'base' => 'modules/purchase-payment/model'
            ],
            'PurchasePayment\\Iface' => [
                'type' => 'file',
                'base' => 'modules/purchase-payment/interface'
            ]
        ],
        'files' => []
    ],
    'libEnum' => [
        'enums' => [
            'purchase-payment.status' => ['Canceled','Pending','Paid']
        ]
    ],
    'libFormatter' => [
        'formats' => [
            'purchase-payment' => [
                'id' => [
                    'type' => 'number'
                ],
                'purchase' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Purchase\\Model\\Purchase',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'purchase'
                ],
                'status' => [
                    'type' => 'enum',
                    'enum' => 'purchase-payment.status'
                ],
                'fee' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'total' => [
                    'type' => 'number',
                    'decimal' => 2
                ],
                'method' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];
