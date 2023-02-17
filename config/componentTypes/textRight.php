<?php
return [
    'id' => 23,
    'type' => 23,
    'folder' => '../components/text',
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
