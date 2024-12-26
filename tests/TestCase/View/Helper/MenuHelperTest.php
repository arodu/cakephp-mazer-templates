<?php
declare(strict_types=1);

namespace MazerTemplates\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use MazerTemplates\View\Helper\MenuHelper;

/**
 * MazerTemplates\View\Helper\MenuHelper Test Case
 */
class MenuHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \MazerTemplates\View\Helper\MenuHelper
     */
    protected $Menu;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Menu = new MenuHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Menu);

        parent::tearDown();
    }
}
