<?php
declare(strict_types=1);

namespace Mazer;

abstract class Mazer
{
    const NAME = 'Mazer';

    const MAZER_MENU = 'MazerMenu';
    const MAZER_MENU_CONFIG = [
        'menuClass' => 'menu',
        'dropdownClass' => 'has-sub',
        'templates' => [
            'menuContainer' => '<ul class="{{menuClass}}">{{items}}</ul>',
            'menuItem' => '<li class="sidebar-item{{class}}{{activeClass}}{{dropdownClass}}">{{text}}{{children}}</li>',
            'menuItemLink' => '<a class="sidebar-link" href="{{url}}">{{icon}}<span>{{text}}</span>{{append}}</a>',
            'menuItemDisabled' => '<li class="sidebar-item{{class}}"><a class="sidebar-link disabled" aria-disabled="true"{{attrs}}>{{icon}}<span>{{text}}</span></a></li>',
            'menuItemLinkDropdown' => '<a class="sidebar-link" href="{{url}}">{{icon}}<span>{{text}}</span></a>',
            'menuItemDivider' => '<li class="sidebar-item"><hr class="mx-4 my-0"></li>',
            'menuItemTitle' => '<li class="sidebar-item {{class}}">{{text}}</li>',
            'dropdownIcon' => '', // '<i class="bi bi-chevron-right"></i>',

            'dropdownContainer' => '<ul class="submenu">{{items}}</ul>',
            'dropdownItem' => '<li class="submenu-item{{class}}{{activeClass}}">{{text}}{{children}}</li>',
            'dropdownItemLink' => '<a class="submenu-link" href="{{url}}">{{text}}</a>',
            'dropdownItemDisabled' => '<li class="submenu-item{{class}}"><a class="submenu-link disabled" aria-disabled="true"{{attrs}}>{{text}}</a></li>',
            'dropdownItemLinkDropdown' => '<a class="submenu-link" href="{{url}}">{{text}}</a>',
            'dropdownItemDivider' => '<li class="submenu-item"><hr class="mx-4 my-0"></li>',
            'menuItemTitle' => '<li class="sidebar-item {{class}}">{{text}}</li>',

            'icon' => '<i class="{{icon}}"></i>',
        ],
    ];
}
