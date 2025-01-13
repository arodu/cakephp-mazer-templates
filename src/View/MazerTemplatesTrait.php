<?php

declare(strict_types=1);

namespace MazerTemplates\View;

use BootstrapUI\View\UIViewTrait;

/**
 * MazerTemplates trait
 * @property \BsUtils\View\Helper\MenuHelper $Menu
 * @property \BsUtils\View\Helper\MenuHelper $MazerMenu
 */
trait MazerTemplatesTrait
{
    use UIViewTrait;

    

    /**
     * @return void
     */
    public function MazerTemplatesInitialize(): void
    {
        $this->loadHelper('BsUtils.Menu');
        $this->loadHelper('MazerMenu', [
            'className' => 'BsUtils.Menu',
            'menuClass' => 'menu',
            'dropdownClass' => 'has-sub',
            'templates' => [
                'menuContainer' => '<ul class="{{menuClass}}">{{items}}</ul>',
                'menuItem' => '<li class="sidebar-item{{class}}{{activeClass}}{{dropdownClass}}">{{text}}{{nest}}</li>',
                //'menuItemDisabled' => '<li class="nav-item"><a class="nav-link disabled" aria-disabled="true">{{icon}}{{text}}</a></li>',
                'menuItemLink' => '<a class="sidebar-link" href="{{url}}">{{icon}}<span>{{text}}</span></a>',
                'menuItemLinkNest' => '<a class="sidebar-link" href="{{url}}">{{icon}}<span>{{text}}</span></a>',

                'dropdownContainer' => '<ul class="submenu">{{items}}</ul>',
                'dropdownItem' => '<li class="submenu-item{{class}}{{activeClass}}">{{text}}{{nest}}</li>',
                //'dropdownItemDisabled' => '<li>{{text}}{{nest}}</li>',
                'dropdownItemLink' => '<a class="submenu-link" href="{{url}}">{{icon}}{{text}}</a>',
                'dropdownItemLinkNest' => '<a class="submenu-link" href="{{url}}">{{icon}}{{text}}</a>',

                'icon' => '<i class="{{icon}}"></i>',
                //'divider' => '<li><hr class="dropdown-divider"></li>',
                'menuTitle' => '<li class="sidebar-item {{class}}">{{text}}{{nest}}</li>',
            ],
        ]);

        $helpers = [
            'Flash' => ['className' => 'BootstrapUI.Flash', 'element' => 'MazerTemplates.flash/default'],
        ];
        $this->helpers = array_merge($helpers, $this->helpers);

        $this->initializeUI();
    }
}
