<?php
return [
    'id' => 20,
    'type' => 20,
    'folder' => '../components/mainslider',
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
