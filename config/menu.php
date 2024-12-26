<?php

return [
    'menu' => [
        'default' => [
            'Dashboard' => [
                'url' => ['controller' => 'Dashboard', 'action' => 'index'],
                'icon' => 'bi bi-house-door',
                'active' => ['controller' => 'Dashboard'],
            ],
            'Projects' => [
                'url' => ['controller' => 'Projects', 'action' => 'index'],
                'icon' => 'bi bi-folder',
                'active' => ['controller' => 'Projects'],
            ],
            'Tasks' => [
                'url' => ['controller' => 'Tasks', 'action' => 'index'],
                'icon' => 'bi bi-card-checklist',
                'active' => ['controller' => 'Tasks', 'action' => 'index'],
            ],
            'Users' => [
                'url' => ['controller' => 'Users', 'action' => 'index'],
                'icon' => 'bi bi-people',
                'active' => function ($request) {
                    return $request->getParam('controller') === 'Users' && $request->getParam('action') !== 'login';
                },
            ],
        ],
    ],
];