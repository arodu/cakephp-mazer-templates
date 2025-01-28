<?php

declare(strict_types=1);

namespace Mazer\View;

use BootstrapTools\View\Trait\MenuLoaderTrait;
use BootstrapUI\View\UIViewTrait;

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
        $this->loadMenuHelper('MazerMenu', [
            'menuClass' => 'menu',
            'dropdownClass' => 'has-sub',
            'templates' => [
                'menuContainer' => '<ul class="{{menuClass}}">{{items}}</ul>',
                'menuItem' => '<li class="sidebar-item{{class}}{{activeClass}}{{dropdownClass}}">{{text}}{{nest}}</li>',
                'menuItemDisabled' => '<li class="sidebar-item{{class}}"><a class="sidebar-link disabled" aria-disabled="true"{{attrs}}>{{icon}}<span>{{text}}</span></a></li>',
                'menuItemLink' => '<a class="sidebar-link" href="{{url}}">{{icon}}<span>{{text}}</span>{{append}}</a>',
                'menuItemLinkNest' => '<a class="sidebar-link" href="{{url}}">{{icon}}<span>{{text}}</span></a>',
                'menuItemDivider' => '<li class="sidebar-item"><hr class="mx-4 my-0"></li>',

                'dropdownContainer' => '<ul class="submenu">{{items}}</ul>',
                'dropdownItem' => '<li class="submenu-item{{class}}{{activeClass}}">{{text}}{{nest}}</li>',
                'dropdownItemDisabled' => '<li class="submenu-item{{class}}"><a class="submenu-link disabled" aria-disabled="true"{{attrs}}>{{text}}</a></li>',
                'dropdownItemLink' => '<a class="submenu-link" href="{{url}}">{{text}}</a>',
                'dropdownItemLinkNest' => '<a class="submenu-link" href="{{url}}">{{text}}</a>',
                'dropdownItemDivider' => '<li class="submenu-item"><hr class="mx-4 my-0"></li>',

                'icon' => '<i class="{{icon}}"></i>',
                'menuTitle' => '<li class="sidebar-item {{class}}">{{text}}{{nest}}</li>',
            ],
        ]);
    }
}
