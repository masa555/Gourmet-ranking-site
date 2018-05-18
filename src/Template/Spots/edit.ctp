<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Spot $spot
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $spot->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $spot->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Spots'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="spots form large-9 medium-8 columns content">
    <?= $this->Form->create($spot) ?>
    <fieldset>
        <legend><?= __('Edit Spot') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('URL');
            echo $this->Form->control('infomation');
            echo $this->Form->control('text');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
