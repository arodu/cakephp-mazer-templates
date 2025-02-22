<?php

declare(strict_types=1);

namespace Mazer\View;

use BootstrapTools\View\Trait\MenuLoaderTrait;
use BootstrapUI\View\UIViewTrait;
use Mazer\Mazer;

/**
 * MazerViewTrait
 * 
 * @property \Mazer\View\Helper\MazerHelper $Mazer
 * @property \BootstrapTools\View\Helper\MenuHelper $MazerMenu
 * @property \BootstrapTools\View\Helper\BsHelper $Bs
 * @property \BootstrapUI\View\Helper\FlashHelper $Flash
 * @property \BootstrapUI\View\Helper\FormHelper $Form
 * @property \BootstrapUI\View\Helper\HtmlHelper $Html
 * 
 */
trait MazerViewTrait
{
    use UIViewTrait;
    use MenuLoaderTrait;

    /**
     * @return void
     */
    public function initializeMazer(array $options = []): void
    {
        $helpers = [
            'Flash' => [
                'className' => 'BootstrapUI.Flash',
                'element' => 'Mazer.flash/default',
            ],
        ];
        $this->helpers = array_merge($helpers, $this->helpers);
        $this->initializeUI();

        $this->addHelper('BootstrapTools.Bs');
        $this->addHelper('Mazer.Mazer', $options);
        $this->loadMenuHelper('MazerMenu', Mazer::MAZER_MENU_CONFIG);
    }
}
