<?php
return [
    'id' => 25,
    'type' => 25,
    'folder' => '../components/counter',
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
            'value' => [
                'type' => 'text',
            ],
        ],
        'nonTrans' => [
            'date' => [
                'type' => 'date',
            ],
        ],
    ]
];
