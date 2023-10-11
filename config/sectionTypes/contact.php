<?php
return [
    'id' => 4,
    'type' => 4,
    'folder' => 'contact',
    'style' => 1,
    'fields' => [
        'trans' => [
            'title' => [
               'type' => 'text',
               'required' => 'required',
               'data-icon' => '-',
            ],
            'slug' => [
                'type' => 'slug',
                'error_msg' => 'slug_is_required',
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
