<?php
return [
    'id' => 6,
    'type' => 6,
    'style' => 2,
    'folder' => 'newspage',
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
                'required' => '',
                'data-icon' => '',
            ],
            'newsAdditional' => [
                'type' => 'text',
                'required' => 'required',
                'data-icon' => '',

            ],


        ],
        'nonTrans' => [

        ],
    ]
];
