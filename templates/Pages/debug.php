<?php

use UtilityKit\Utility\Common;

$this->assign('title', 'CakePHP: the rapid development php framework');
$this->assign('subTitle', 'Mazer Templates plugin debug page');

$this->MazerMenu->activeItem('debug');

echo $this->element('BootstrapTools.pages/debug', [
    'plugin' => [
        'name' => 'arodu/cakephp-mazer',
        'version' => Common::getPackageVersion('arodu/cakephp-mazer'),
        'description' => __('A CakePHP plugin for Mazer theme integration.'),
        'url' => 'https://github.com/arodu/cakephp-mazer',
    ]
]);
