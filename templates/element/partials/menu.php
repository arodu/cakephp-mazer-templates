<?php

/**
 * @var \App\View\AppView $this
 */

$menu = [
    [
        'title' => 'Menu',
        'type' => 'title',
    ],
    [
        'title' => 'Dashboard',
        'url' => [
            'controller' => 'Projects',
            'action' => 'index',
        ],
        'icon' => 'bi bi-grid-fill',
    ],
    'components' => [
        'title' => 'Components',
        'url' => '#',
        'icon' => 'bi bi-stack',
        'children' => [
            'accordion' => [
                'title' => 'Accordion',
                'url' => 'component-accordion.html',
            ],
            [
                'title' => 'Alert',
                'url' => 'component-alert.html',
            ],
        ],
    ],
    [
        'title' => 'Forms & Tables',
        'type' => 'title',
    ],
    [
        'title' => 'Form Elements',
        'url' => '#',
        'icon' => 'bi bi-hexagon-fill',
        'children' => [
            [
                'title' => 'Input',
                'url' => 'form-element-input.html',
            ],
            [
                'title' => 'Checkbox',
                //'url' => 'form-element-checkbox.html',
                'children' => [
                    [
                        'title' => 'Input',
                        'url' => 'form-element-input.html',
                    ],
                    [
                        'title' => 'Checkbox',
                        'url' => 'form-element-checkbox.html',
                    ],
                ],
            ],
        ],
    ],
];
?>

<div class="sidebar-menu">
    <?= $this->Menu->render($menu, [
        'activeItem' => 'components.accordion',
    ]) ?>
</div>