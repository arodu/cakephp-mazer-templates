<?php
declare(strict_types=1);

namespace MazerTemplates\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use MazerTemplates\View\Helper\MazerMenuHelper;

/**
 * MazerTemplates\View\Helper\MazerMenuHelper Test Case
 */
class MazerMenuHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \MazerTemplates\View\Helper\MazerMenuHelper
     */
    protected $MazerMenu;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->MazerMenu = new MazerMenuHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MazerMenu);

        parent::tearDown();
    }
}
