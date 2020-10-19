<div class="container">
    <div class="users form content">
        <?= $this->Form->create($user) ?>
            <div class="text-center">ユーザー編集</div>
            <?php
                echo $this->Form->control('name', ['label' => 'ユーザー名', 'class' => 'form-control']);
                echo $this->Form->control('email', ['label' => 'メールアドレス', 'class' => 'form-control']);
                echo $this->Form->control('password', ['label' => 'パスワード', 'class' => 'form-control']);
            ?>
            <div class="text-center my-3">
                <?= $this->Form->button(__('更新する'), ['class' => 'btn btn-outline-primary']) ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>
