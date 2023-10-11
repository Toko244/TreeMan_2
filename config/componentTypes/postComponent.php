<?php
return [
    'id' => 21,
    'type' => 21,
    'style' => 2,
    'folder' => '../components/postComponent',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'redirect_link' => [
                'type' => 'text',
                'required' => '',
                'data-icon' => '',
            ],
            'active' => [
                'type' => 'checkbox',
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
