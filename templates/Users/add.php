<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form">
    <?= $this->Form->create($user) ?>
        <div><?= __('ユーザ登録') ?></div>
        <?= $this->Form->control('email', ['label' => 'メールアドレス', 'required' => true]) ?>
        <?= $this->Form->control('password', ['label' => 'パスワード', 'required' => true]) ?>
        <?= $this->Form->button(__('登録する'), ['class' => 'btn btn-outline-primary']); ?>
    <?= $this->Form->end() ?>
</div>
