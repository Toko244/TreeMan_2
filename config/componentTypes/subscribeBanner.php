<?php
return [
    'id' => 32,
    'type' => 33,
    'folder' => '../components/subscribebanner',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'reqired' => 'required',
                'max' => '100',
                'min' => '3',
                'name' => 'title',
                'translateble' => true,
            ],
            'desc' => [
                'type' => 'textarea',
            ],
        ],
        'nonTrans' => [
        ],
    ]
];
