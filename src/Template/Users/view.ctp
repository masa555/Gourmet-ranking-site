<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('') ?></li>
        <li><?= $this->Html->link(__('ユーザーの編集'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('ユーザーの削除'), ['action' => 'delete', $user->id], ['confirm' => __('本当によろしいですか？ # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('ユーザーリスト'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('新規ユーザー登録'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>
