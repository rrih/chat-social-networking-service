<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form">
    <?= $this->Form->create($user) ?>
        <div><?= __('ユーザ登録') ?></div>
        <?= $this->Form->control('メールアドレス') ?>
        <?= $this->Form->control('パスワード') ?>
        <?= $this->Form->button(__('登録する'), ['class' => 'btn btn-outline-primary']); ?>
    <?= $this->Form->end() ?>
</div>
