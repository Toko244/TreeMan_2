<?php
return [
    'id' => 23,
    'type' => 23,
    'folder' => '../components/cardbanner',
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
            'target' => [
                'type' => 'toggle',
            ],
            'date' => [
                'type' => 'date',
            ],
        ],
    ]
];
