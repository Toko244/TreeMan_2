<?php
return [
    'id' => 1,
    'type' => 1,
    'name' => 'card_banner',
    'fields' => [
        'trans' => [
            'name' => [
                'type' => 'text',
                'required' => 'required',
            ],
            'redirect_link' => [
                'type' => 'textnorequired'
            ],
			'thumb' => [
                'type' => 'thumb',
            ],
            'active' => [
                'type' => 'checkbox',
            ],
        ],
        'nonTrans' => [
            'date' => [
                'type' => 'date',
                'required' => 'required',
                'validation' => 'required|max:20',
            ],
        ]
    ]
];
