<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->charset() ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Mazer->renderMeta() ?>
    <?= $this->fetch('meta') ?>
    <?= $this->Mazer->renderCss() ?>
    <?= $this->fetch('css') ?>
</head>

<body>
    <div id="app">
        <?= $this->element('Mazer.sidebar/main') ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <?= $this->element('Mazer.header/page_title') ?>
            </div>
            <div class="page-content">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
            <footer class="mt-auto">
                <?= $this->element('Mazer.footer/main') ?>
            </footer>
        </div>
    </div>
    <?= $this->Mazer->renderScripts() ?>
    <?= $this->fetch('script') ?>
</body>

</html>