<?php
return [
    'id' => 28,
    'type' => 28,
    'folder' => '../components/postslider',
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
                'type' => 'switch',
            ],
            'date' => [
                'type' => 'date',
            ],
        ],
    ]
];