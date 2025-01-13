<div class="page-title">
    <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3><?= $this->fetch('title') ?></h3>
            <?php if ($this->fetch('subTitle')): ?>
                <p class="text-subtitle text-muted"><?= $this->fetch('subTitle') ?></p>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <?= $this->Breadcrumbs->render([
                'class' => 'breadcrumb-header float-start float-lg-end',
            ]) ?>
        </div>
    </div>
</div>