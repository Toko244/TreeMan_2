<?php
return [
    'id' => 4,
    'type' => 4,
    'folder' => 'contact',
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
            'address' => [
                'type' => 'text',
            ],
            'active' => [
                'type' => 'checkbox',
            ],
        ],
        'nonTrans' => [
            'mobile' => [
                'type' => 'text',
            ],
            'email' => [
                'type' => 'text',
            ],
            'image' => [
                'type' => 'image',
            ],
        ],
    ]
];
