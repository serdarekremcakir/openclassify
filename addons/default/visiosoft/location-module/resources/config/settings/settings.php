<?php


return [
    'home_page_location' => [
        'type' => 'anomaly.field_type.boolean',
        'config' => [
            'default_value' => true,
        ],
    ],
    'list_page_location' => [
        'type' => 'anomaly.field_type.boolean',
        'config' => [
            'default_value' => true,
        ],
    ],
    'detail_page_location' => [
        'type' => 'anomaly.field_type.boolean',
        'config' => [
            'default_value' => true,
        ],
    ],
    'create_ad_page_location' => [
        'type' => 'anomaly.field_type.boolean',
        'config' => [
            'default_value' => true,
        ],
    ],
    'default_country' => [
        'type' => 'anomaly.field_type.relationship',
        "config" => [
            "related" => \Visiosoft\LocationModule\Country\CountryModel::class
        ]
    ],
    'country_for_phone_field' => [
        'type' => 'anomaly.field_type.select',
        'required' => false,
        'config' => [
            'default_value' => function () {
                return config('visiosoft.theme.base::countries.default');
            },
            'options' => function () {
                $array = \Visiosoft\LocationModule\Country\CountryModel::query()->get()->pluck('name', 'abv')->toArray();
                return $array;
            },
        ],
    ],
    'default_city' => [
        'type' => 'anomaly.field_type.select',
    ],
    'default_district' => [
        'type' => 'anomaly.field_type.select',
    ],
    'default_neighborhood' => [
        'type' => 'anomaly.field_type.select',
    ],

    'google_map_key' => [
        'type' => 'anomaly.field_type.text',
        'bind' => 'adv.google_map_key',
        'env' => 'ADV_MAP_KEY',
        'config' => [
            'default_value' => 'AIzaSyB9TmIjBED5fZvnTmElkMxFA75Nle1X0qc',
        ],
    ],

    'map_coordinates_long' => [
        'type' => 'anomaly.field_type.text',
        'bind' => 'adv.map_coordinates_long',
        'env' => 'ADV_MAP_LONG',
        'config' => [
            'default_value' => '28.74558607285155',
        ],
    ],
    'map_coordinates_lat' => [
        'type' => 'anomaly.field_type.text',
        'bind' => 'adv.map_coordinates_lat',
        'env' => 'ADV_MAP_LAT',
        'config' => [
            'default_value' => '40.97817786299617',
        ],
    ],

    'hide_location_filter' => [
        'type' => 'anomaly.field_type.boolean',
        'config' => [
            'default_value' => false,
        ],
    ],
    'sorting_column' => [
        'type' => 'anomaly.field_type.select',
        'config' => [
            'default_value' => 'slug',
            'options' => [
                'slug' => 'slug',
                'id' => 'id',
                'order' => 'order'
            ],
        ],
    ],
    'sorting_type' => [
        'type' => 'anomaly.field_type.select',
        'config' => [
            'default_value' => 'ASC',
            'options' => [
                'ASC' => 'ASC', 'DESC' => 'DESC'
            ],
        ],
    ],
];
