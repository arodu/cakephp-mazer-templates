<?php

declare(strict_types=1);

namespace MazerTemplates\View\Helper;

use Cake\Core\Configure;
use Cake\Event\EventInterface;
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
        'css' => [
            'MazerTemplates./mazer/assets/compiled/css/app',
            'MazerTemplates./mazer/assets/compiled/css/app-dark',
            'MazerTemplates.style',
        ],
        'scripts' => [
            'MazerTemplates./mazer/assets/static/js/initTheme',
            'MazerTemplates./mazer/assets/static/js/components/dark',
            'MazerTemplates./mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min',
            'MazerTemplates./mazer/assets/compiled/js/app',
        ],
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
     * @param array|string $url
     * @param array $options
     * @return self
     */
    public function addScript(string $url)
    {
        $this->setConfig('scripts', array_merge($this->getConfig('scripts', []), [$url]));
        return $this;
    }

    /**
     * # options:
     * @param array|string $url
     * @param array $options
     * @return self
     */
    public function addCss(string $url)
    {
        $this->setConfig('css', array_merge($this->getConfig('css', []), [$url]));
        return $this;
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

    public function beforeRender(EventInterface $event, $viewFile)
    {
        foreach ($this->getConfig('meta') as $name => $content) {
            $this->Html->meta($name, $content, ['block' => true]);
        }
        $this->Html->css($this->getConfig('css'), ['block' => true]);
        $this->Html->script($this->getConfig('scripts'), ['block' => true]);
    }
}
