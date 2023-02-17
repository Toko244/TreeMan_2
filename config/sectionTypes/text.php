<?php
return [
    'id' => 2,
    'type' => 2,
    'folder' => 'textpage',
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
        ],
    ]
];
