<!-- in /templates/Users/login.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <div>ログイン画面</div>
    <?= $this->Form->create() ?>
        <?= $this->Form->control('email', ['label' => 'メールアドレス', 'required' => true, 'class' => 'form-control']) ?>
        <?= $this->Form->control('password', ['label' => 'パスワード', 'required' => true, 'class' => 'form-control']) ?>
        <?= $this->Form->submit(__('ログイン'), ['class' => 'btn btn-outline-primary']); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("まだ登録していない方はこちら", ['action' => 'add']) ?>
</div>
