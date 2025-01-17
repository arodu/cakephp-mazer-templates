<div class="clearfix mb-0 text-muted row">
    <div class="col-12 col-sm-6">
        <p>
            <?= date('Y') > 2024 ? '2024-' . date('Y') : '2024' ?>
            &copy; Cakephp Mazer Template</p>
    </div>
    <div class="col-12 col-sm-6 text-sm-end ">
        <p>
            <?= $this->Html->link(
                'Mazer Template',
                'https://zuramai.github.io/mazer/',
                ['escape' => false]
            ) ?>
        </p>
    </div>
</div>