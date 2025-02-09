<?php

use BootstrapTools\View\Helper\MenuHelper;
use Cake\Core\Configure;
use Cake\Http\ServerRequest;

return [
    'Menu' => [
        [
            'label' => __('Menu'),
            'type' => MenuHelper::ITEM_TYPE_TITLE
        ],
        'home' => [
            'label' => __('Home'),
            'url' => '/',
            'icon' => 'bi bi-grid-fill',
        ],
        'debug' => [
            'label' => __('Debug'),
            'url' => '/mazer/debug',
            'icon' => 'bi bi-bug-fill',
            'show' => function (ServerRequest $request) {
                return Configure::read('debug');
            },
        ],
        'levels' => [
            'label' => __('Levels'),
            'icon' => 'bi bi-layers-fill',
            'children' => [
                'level1' => [
                    'label' => __('Level 1'),
                    'url' => '#',
                    'icon' => 'bi bi-layers-fill',
                    'children' => [
                        'level2' => [
                            'label' => __('Level 2'),
                            'url' => '#',
                            'icon' => 'bi bi-layers-fill',
                            'children' => [
                                'level3' => [
                                    'label' => __('Level 3'),
                                    'url' => '#',
                                    'icon' => 'bi bi-layers-fill',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ]
    ],
];
