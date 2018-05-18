<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Spot $spot
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('') ?></li>
        <li><?= $this->Html->link(__(''), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="spots form large-9 medium-8 columns content">
    <?= $this->Form->create($spot) ?>
    <fieldset>
        <legend><?= __('新しい観光地の追加') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('URL');
            echo $this->Form->control('infomation');
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button('追加',
  array('div'=>'form-group',
  'class'=>' btn btn-primary  btn-success center-block btn-lg',
  )); ?>
<?= $this->Form->end() ?>