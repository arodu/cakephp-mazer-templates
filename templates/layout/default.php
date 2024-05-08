<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->Html->charset() ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('MazerTemplates./mazer/assets/compiled/css/app') ?>
    <?= $this->Html->css('MazerTemplates./mazer/assets/compiled/css/app-dark') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>

<body>
    <?= $this->Html->script('MazerTemplates./mazer/assets/static/js/initTheme') ?>
    <div id="app">
        <?= $this->element('MazerTemplates.partials/sidebar') ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="page-heading">
                <?= $this->element('MazerTemplates.partials/page_title') ?>
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
            <?= $this->element('MazerTemplates.partials/page_title') ?>
            <?= $this->element('MazerTemplates.partials/footer') ?>
        </div>
    </div>
    <?= $this->Html->script('MazerTemplates./mazer/assets/static/js/components/dark') ?>
    <?= $this->Html->script('MazerTemplates./mazer/assets/extensions/perfect-scrollbar/perfect-scrollbar.min') ?>
    <?= $this->Html->script('MazerTemplates./mazer/assets/compiled/js/app') ?>
    <?= $this->fetch('script') ?>
</body>
</html>