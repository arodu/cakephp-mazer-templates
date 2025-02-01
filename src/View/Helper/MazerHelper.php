<?php

declare(strict_types=1);

namespace Mazer\View\Helper;

use BootstrapTools\View\Helper\BootstrapThemeHelper;
use Cake\Core\Configure;
use Cake\Event\EventInterface;
use Cake\Utility\Hash;

/**
 * Mazer helper
 * 
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class MazerHelper extends BootstrapThemeHelper
{
    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected array $_defaultConfig = [
        'settings' => [
            'appName' => 'Mazer',
            'appLogo' => 'M',
            'copyright' => '© 2021 Mazer',
        ],
        'autoRenderAssets' => false,
        'meta' => [],
        'css' => [
            'Mazer./mazer/assets/compiled/css/app',
            'Mazer./mazer/assets/compiled/css/app-dark',
            'Mazer.style',
        ],
        'scripts' => [
            'Mazer./mazer/assets/static/js/initTheme',
            'Mazer./mazer/assets/static/js/components/dark',
            'Mazer./mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min',
            'Mazer./mazer/assets/compiled/js/app',
        ],
    ];

    /**
     * @inheritDoc
     */
    public function initialize(array $config): void
    {
        $config = Hash::merge($this->getConfig(null, []), Configure::read('Mazer', []), $config);
        $this->setConfig($config);
    }
}
