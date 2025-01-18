<?php
declare(strict_types=1);

namespace MazerTemplates\View\Helper;

use Cake\Core\Configure;
use Cake\Utility\Hash;
use Cake\View\Helper;

/**
 * Mazer helper
 * 
 * @property \Cake\View\Helper\HtmlHelper $Html
 */
class MazerHelper extends Helper
{
    /**
     * Default configuration.
     * 
     * - appName: application name
     * - appLogo: application logo
     * - script: script files 
     * - css: css files
     *
     * @var array<string, mixed>
     */
    protected array $_defaultConfig = [
        'appName' => 'Mazer',
        'appLogo' => 'M',
        'copyright' => '© 2021 Mazer',

        'meta' => [],
        'css' => [],
        'script' => [],
    ];

    protected array $helpers = ['Html'];

    /**
     * @inheritDoc
     */
    public function initialize(array $config): void
    {
        $config = Hash::merge($this->getConfig(null, []), Configure::read('Mazer', []), $config);
        $this->setConfig($config);
    }

    /**
     * # options:
     * - overwrite: bool
     *
     * @param array|string $url
     * @param array $options
     * @return string|null
     */
    public function script(array|string $url, array $options = []): ?string
    {
        if(is_string($url)) {
            $url = [$url];
        }

        if (isset($options['overwrite']) && $options['overwrite']) {
            $script = $url;
        } else {
            $script = Hash::merge($this->getConfig('script', []), $url);
        }
        unset($options['overwrite']);

        if (empty($script)) {
            return null;
        }

        return $this->Html->script($script, $options);
    }

    /**
     * # options:
     * - overwrite: bool
     *
     * @param array|string $url
     * @param array $options
     * @return string|null
     */
    public function css(array|string $url, array $options = []): ?string
    {
        if(is_string($url)) {
            $url = [$url];
        }

        if (isset($options['overwrite']) && $options['overwrite']) {
            $css = $url;
        } else {
            $css = Hash::merge($this->getConfig('css', []), $url);
        }
        unset($options['overwrite']);

        if (empty($css)) {
            return null;
        }

        return $this->Html->css($css, $options);
    }

    public function getAppName(): string
    {
        return $this->getConfig('appName');
    }

    public function setAppName(string $appName)
    {
        $this->setConfig('appName', $appName);

        return $this;
    }

    public function appLogo(): string
    {
        return $this->getConfig('appLogo');
    }

    public function setAppLogo(string $appLogo)
    {
        $this->setConfig('appLogo', $appLogo);

        return $this;
    }
}
