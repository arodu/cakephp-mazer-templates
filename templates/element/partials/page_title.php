<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3><?= $this->fetch('title') ?></h3>
            <p class="text-subtitle text-muted"><?= $this->fetch('subTitle') ?></p>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <?= $this->element('MazerTemplates.partials/breadcrumb') ?>
        </div>
    </div>
</div>