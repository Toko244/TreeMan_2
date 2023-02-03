<?php
return [
    'id' => 21,
    'type' => 21,
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
            'images' => [
                'type' => 'images',
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
