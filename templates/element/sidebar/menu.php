<?php

/**
 * @var \App\View\AppView $this
 */

use Cake\Core\Configure;

$mainMenu = [
    [
        'label' => __('Menu'),
        'type' => $this->MazerMenu::ITEM_TYPE_TITLE
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
        'visible' => function (\Cake\Http\ServerRequest $request) {
            return Configure::read('debug');
        },
    ],
    'components' => [
        'label' => __('Components'),
        'url' => '#',
        'icon' => 'bi bi-stack',
        'children' => [
            'accordion' => [
                'label' => __('Accordion'),
                'url' => 'component-accordion.html',
            ],
            [
                'label' => __('Alert'),
                'url' => 'component-alert.html',
            ],
        ],
    ],
    [
        'label' => __('Forms & Tables'),
        'type' => $this->MazerMenu::ITEM_TYPE_TITLE
    ],
    [
        'label' => __('Form Elements'),
        'url' => '#',
        'icon' => 'bi bi-hexagon-fill',
        'children' => [
            [
                'label' => __('Input'),
                'url' => 'form-element-input.html',
            ],
            [
                'label' => __('Checkbox'),
                //'url' => 'form-element-checkbox.html',
                'children' => [
                    [
                        'label' => __('Input'),
                        'url' => 'form-element-input.html',
                    ],
                    [
                        'label' => __('Checkbox'),
                        'url' => 'form-element-checkbox.html',
                    ],
                    [
                        'type' => $this->MazerMenu::ITEM_TYPE_DIVIDER
                    ],
                    [
                        'label' => __('Disabled'),
                        'url' => '#',
                        //'disabled' => function (\Cake\Http\ServerRequest $request) {
                        //    return true;
                        //},
                    ]
                ],
            ],
        ],
    ],
    [
        'label' => __('Theme'),
        'url' => '/mazer/mazer/index.html',
        'icon' => 'bi bi-palette-fill',
        'target' => '_blank',
    ],
    [
        'label' => __('Fork me on GitHub'),
        'url' => 'https://github.com/arodu/cakephp-mazer',
        'icon' => 'bi bi-github',
    ]
];

?>

<div class="sidebar-menu">
    <?= $this->MazerMenu->render($mainMenu) ?>
</div>