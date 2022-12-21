<?php
return [
    'id' => 1,
    'type' => 3,
    'folder' => 'constructor',
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
            'text' => [
                'type' => 'textarea',
            ],
        ],
        'nonTrans' => [
            'date' => [
                'type' => 'date',
            ],
        ],
    ]
];
