<?php

/**
 * @var \App\View\AppView $this
 */

$menu = $this->MazerMenu->menuFromFile();

?>

<div class="sidebar-menu">
    <?= $this->MazerMenu->render($menu) ?>
</div>