<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<!-- TODO ユーザー編集画面 -->
<div class="row">
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
                <div>ユーザー編集</div>
                <?php
                    echo $this->Form->control('name', ['label' => 'ユーザー名']);
                    echo $this->Form->control('email', ['label' => 'メールアドレス']);
                    echo $this->Form->control('password', ['label' => 'パスワード']);
                ?>
                <?= $this->Form->button(__('更新する'), ['class' => 'btn btn-outline-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
