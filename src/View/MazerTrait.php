<?php

declare(strict_types=1);

namespace Mazer\View;

use BootstrapTools\View\Trait\MenuLoaderTrait;
use BootstrapUI\View\UIViewTrait;
use Mazer\Mazer;

/**
 * Mazer trait
 * @property \BootstrapTools\View\Helper\MenuHelper $Menu
 * @property \BootstrapTools\View\Helper\MenuHelper $MazerMenu
 */
trait MazerTrait
{
    use UIViewTrait;
    use MenuLoaderTrait;

    /**
     * @return void
     */
    public function MazerInitialize(array $options = []): void
    {
        $helpers = [
            'Flash' => [
                'className' => 'BootstrapUI.Flash',
                'element' => 'Mazer.flash/default',
            ],
        ];
        $this->helpers = array_merge($helpers, $this->helpers);
        $this->initializeUI();

        $this->loadHelper('Mazer.Mazer', $options);
        $this->loadMenuHelper('MazerMenu', Mazer::MAZER_MENU_CONFIG);
    }
}
