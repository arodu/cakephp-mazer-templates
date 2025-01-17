<?php

/**
 * @var \App\View\AppView $this
 */

$mainMenu = [
    [
        'label' => __('Menu'),
        'type' => $this->MazerMenu::ITEM_TYPE_TITLE
    ],
    [
        'label' => __('Dashboard'),
        'url' => [
            'controller' => __('Projects'),
            'action' => 'index',
        ],
        'icon' => 'bi bi-grid-fill',
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
                ],
            ],
        ],
    ],
    [
        'label' => __('Theme'),
        'url' => '/mazer_templates/mazer/index.html',
        'icon' => 'bi bi-palette-fill',
    ],
    [
        'label' => __('Fork me on GitHub'),
        'url' => 'https://github.com/arodu/cakephp-mazer-templates',
        'icon' => 'bi bi-github',
    ]
];

$this->MazerMenu->activeItem('components.accordion');

?>

<div class="sidebar-menu">
    <?= $this->MazerMenu->render($mainMenu) ?>
</div>