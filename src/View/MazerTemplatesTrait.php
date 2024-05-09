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
    }
}