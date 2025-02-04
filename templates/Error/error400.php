<?php
/**
 * @var \App\View\AppView $this
 */

$this->layout = 'Mazer.error';
?>

<?= $this->Html->image('Mazer./mazer/assets/compiled/svg/error-404.svg', ['class' => 'img-error', 'alt' => 'Not Found']) ?>

<h1 class="error-title"><?= h($message) ?></h1>

<p class='fs-5 text-gray-600'><?= __('The page you are looking not found.') ?></p>