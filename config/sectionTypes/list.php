<?php
return [
    'id' => 5,
    'type' => 5,
    'style' => 1,
    'folder' => 'listpage',
    'fields' => [
        'trans' => [
            'title' => [
               'type' => 'text',
               'required' => 'required',
               'data-icon' => '-',
            ],
            'slug' => [
                'type' => 'text',
                'error_msg' => 'slug_is_required',
                'required' => 'required',
                'data-icon' => '-',
            ],
            'desc' => [
                'type' => 'textarea',
                'required' => '',
                'data-icon' => '',
            ],
            'active' => [
                'type' => 'checkbox',
            ],
        ],
        'nonTrans' => [
        ],
    ]
];
