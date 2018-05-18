<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Food $food
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Foods'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Comments'), ['controller' => 'Comments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="foods form large-9 medium-8 columns content">
    <?= $this->Form->create($food) ?>
    <fieldset>
        <legend><?= __('Add Food') ?></legend>
        <?php
            echo $this->Form->control('prefecture');
            echo $this->Form->control('name');
            echo $this->Form->control('title');
            echo $this->Form->control('imgURL');
            echo $this->Form->control('slug');
            echo $this->Form->control('price');
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
