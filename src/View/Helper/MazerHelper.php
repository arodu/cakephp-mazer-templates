<?php

declare(strict_types=1);

namespace Mazer\View\Helper;

use BootstrapTools\View\Trait\ThemeSettingsTrait;
use Cake\View\Helper;
use Mazer\Mazer;

/**
 * Mazer helper
 */
class MazerHelper extends Helper
{
    use ThemeSettingsTrait;

    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected array $_defaultConfig = [
        'configKey' => Mazer::NAME,
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
        $this->themeSettingsInitialize($config);
    }
}
