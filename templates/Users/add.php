<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="text-center">
    <?= $this->Flash->render() ?>
    <div>ユーザ登録</div>
    <div class="text-left">
        <?= $this->Form->create($user) ?>
            <?= $this->Form->control('email', ['label' => 'メールアドレス', 'required' => true, 'class' => 'form-control']) ?>
            <?= $this->Form->control('password', ['label' => 'パスワード', 'required' => true, 'class' => 'form-control']) ?>
            <div class="text-center my-3">
                <?= $this->Form->button(__('登録する'), ['class' => 'btn btn-outline-primary']); ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>
