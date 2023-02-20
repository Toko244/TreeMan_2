<?php
return [
    'id' => 4,
    'type' => 4,
    'folder' => 'contact',
    'fields' => [
        'trans' => [
            'title' => [
               'type' => 'text',
               'required' => 'required',
               'data-icon' => '-',
            ],
            'desc' => [
                'type' => 'textarea',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'address' => [
                'type' => 'text',
                'required' => '',
                'data-icon' => '-',
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
