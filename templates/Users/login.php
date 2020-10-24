<div class="text-center container">
    <?= $this->Flash->render() ?>
    <div>ログイン画面</div>
    <?= $this->Form->create() ?>
        <div class="text-left">
            <?= $this->Form->control('email', ['label' => 'メールアドレス', 'required' => true, 'class' => 'form-control']) ?>
            <?= $this->Form->control('password', ['label' => 'パスワード', 'required' => true, 'class' => 'form-control']) ?>
        </div>
        <div class="text-center my-3">
            <?= $this->Form->submit(__('ログイン'), ['class' => 'btn btn-outline-primary rounded-pill px-5 py-3']); ?>
        </div>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("まだ登録していない方はこちら", ['action' => 'signup']) ?>
</div>
