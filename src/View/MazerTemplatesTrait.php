<?php
declare(strict_types=1);

namespace MazerTemplates\View;

use BootstrapUI\View\UIViewTrait;

/**
 * MazerTemplates trait
 */
trait MazerTemplatesTrait
{
    use UIViewTrait;

    /**
     * @return void
     */
    public function MazerTemplatesInitialize(): void
    {
        $this->initializeUI();
        $this->loadHelper('BsUtils.Menu', [
            'nestClass' => 'has-sub',
            'templates' => [
                'menu' => '<ul class="menu">{{items}}</ul>',
                'menuItem' => '<li class="sidebar-item {{class}}">{{text}}{{nest}}</li>',
                'menuLink' => '<a href="{{url}}" class="sidebar-link">{{icon}}<span>{{text}}</span></a>',
                'nest' => '<ul class="submenu">{{items}}</ul>',
                'nestItem' => '<li class="submenu-item {{class}}">{{text}}{{nest}}</li>',
                'nestLink' => '<a href="{{url}}" class="submenu-link">{{icon}}{{text}}</a>',
                'icon' => '<i class="{{icon}}"></i>',
            ],
        ]);
    }
}