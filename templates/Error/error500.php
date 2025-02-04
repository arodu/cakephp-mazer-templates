<?php

/**
 * @var \App\View\AppView $this
 */

$this->layout = 'Mazer.error';
?>

<?= $this->Html->image('Mazer./mazer/assets/compiled/svg/error-404.svg', ['class' => 'img-error', 'alt' => 'Not Found']) ?>

<h1 class="error-title"><?= __d('cake', 'An Internal Error Has Occurred.') ?></h1>

<p class="fs-5 text-gray-600 error">
    <strong><?= __d('cake', 'Error') ?>: </strong>
    <?= h($message) ?>
</p>