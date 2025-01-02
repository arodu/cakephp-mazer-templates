<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p>
                <?= date('Y') > 2024 ? '2024-' . date('Y') : '2024' ?>
                &copy; Cakephp Mazer Template</p>
        </div>
        <div class="float-end">
            <p>
                <?= $this->Html->link(
                    'Mazer Template',
                    'https://zuramai.github.io/mazer/',
                    ['escape' => false]
                ) ?>
            </p>
        </div>
    </div>
</footer>