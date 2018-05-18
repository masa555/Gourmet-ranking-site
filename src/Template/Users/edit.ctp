<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('') ?></li>
        <li><?= $this->Form->postLink(
                __('削除'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('本当によろしいですか？ # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('ユーザーリスト'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('ユーザーの編集') ?></legend>
        <?php
            echo $this->Form->control('メールアドレス');
            echo $this->Form->control('パスワード');

        ?>
    </fieldset>
    <?= $this->Form->button(__('編集')) ?>
    <?= $this->Form->end() ?>
</div>
