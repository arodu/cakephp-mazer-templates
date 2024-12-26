<?php
declare(strict_types=1);

namespace MazerTemplates\View\Helper;

use BsUtils\View\Helper\MenuHelper;

/**
 * MazerMenu helper
 */
class MazerMenuHelper extends MenuHelper
{
    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected array $_defaultConfig = [
        'menuClass' => 'menu',
        'submenuClass' => 'submenu',
        'itemClass' => 'sidebar-item',
        'linkClass' => 'sidebar-link',
        'iconClass' => 'bi bi-caret-right-fill',
        'textClass' => 'sidebar-title',
        'templates' => [
            'menu' => '<ul class="{{class}}">{{items}}</ul>',
            'item' => '<li class="{{itemClass}}">{{link}}{{nest}}</li>',
            'link' => '<a href="{{url}}" class="{{linkClass}}">{{icon}}{{title}}</a>',
            'icon' => '<i class="{{icon}}"></i>',
            'text' => '<li class="{{class}}">{{text}}</li>',
            'caption' => '<span>{{text}}</span>',
        ],
    ];
}
