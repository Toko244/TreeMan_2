<?php
return [
    'id' => 20,
    'type' => 20,
    'style' => 2,
    'folder' => '../components/mainslider',
    'fields' => [
        'trans' => [
            'title' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'desc' => [
                'type' => 'textarea',
                'required' => '',
                'data-icon' => '',
            ],
            'redirect_link' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'active' => [
                'type' => 'checkbox',
            ],
        ],
        'nonTrans' => [
            'images' => [
                'type' => 'images',
            ],
            'target_blank' => [
                'type' => 'switch',
            ],
            'only_image' => [
                'type' => 'switch',
            ],
            'date' => [
                'type' => 'date',
            ],
        ],
    ]
];
