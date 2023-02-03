<?php
return [
    'id' => 26,
    'type' => 26,
    'folder' => '../components/text',
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
            'desc' => [
                'type' => 'textarea',
            ],
            'text' => [
                'type' => 'textarea',
            ],
            'redirect_link' => [
                'type' => 'text',
            ],
        ],
        'nonTrans' => [
            'images' => [
                'type' => 'images',
            ],
            'target' => [
                'type' => 'toggle',
            ],
            'component_style' => [
                'type' => 'radio',
            ],
            'date' => [
                'type' => 'date',
            ],
        ],
    ]
];
