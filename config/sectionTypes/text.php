<?php
return [
    'id' => 2,
    'type' => 2,
    'folder' => 'textpage',
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
            'slug' => [
                'type' => 'text',
                'error_msg' => 'slug_is_required',
                'required' => 'required',
            ],
            'desc' => [
                'type' => 'textarea',
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
