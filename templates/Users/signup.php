<div class="text-center container">
    <?= $this->Flash->render() ?>
    <div>ユーザ登録</div>
    <div class="text-left">
        <?= $this->Form->create($user) ?>
            <?= $this->Form->control('email', ['label' => 'メールアドレス', 'required' => true, 'class' => 'form-control']) ?>
            <?= $this->Form->control('password', ['label' => 'パスワード', 'required' => true, 'class' => 'form-control']) ?>
            <div class="text-center my-3">
                <?= $this->Form->button(__('登録する'), ['class' => 'btn rounded-pill px-5 py-3']); ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>
