<?php
return [
    'id' => 22,
    'type' => 22,
    'folder' => '../components/text',
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
            'redirect_link' => [
                'type' => 'text',
            ],
        ],
        'nonTrans' => [
            'image' => [
                'type' => 'image',
            ],
            'target_blank' => [
                'type' => 'switch',
            ],
            'date' => [
                'type' => 'date',
            ],
        ],
    ]
];
