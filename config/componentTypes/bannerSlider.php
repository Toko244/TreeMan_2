<?php
return [
    'id' => 20,
    'type' => 20,
    'folder' => '../components/bannerSlider',
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
            'text' => [
                'type' => 'textarea',
            ],
            'active' => [
                'type' => 'checkbox',
            ],
        ],
        'nonTrans' => [
            'email' => [
                'type' => 'text',
            ],
        ],
    ]
];
