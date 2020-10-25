<div class="text-center container">
    <div>
        <div>
            <?= $this->Users->getOneUserName($otherUser->id) ?>とのメッセージ
        </div>
        <?= $this->Form->create(null, ['url' => '/messages/view/' . $otherUser->id, 'type' => 'post']) ?>
            <?php
                echo $this->Form->control('message', ['label' => false, 'type' => 'textarea', 'class' => 'form-control', 'empty' => false, 'required' => true, 'name' => 'message', 'maxlength' => 500]);
            ?>
            <div class="text-center my-3"><?= $this->Form->button(__('送信'), ['class' => 'btn btn-outline-primary rounded-pill px-4 py-3']) ?></div>
        <?= $this->Form->end() ?>
        <?php foreach ($messages as $msg): ?>
            <div class="card my-3 shadow-sm">
                <div class="card-header h5 border-bottom d-flex justify-content-between">
                    <div>送信者 <?= $this->Users->getOneUserName($msg->message_user_id) ?></div>
                    <div class="text-right">
                        <?= $msg->created->format('yy-m-d h:m:s') ?>
                    </div>
                </div>
                <div class="card-body text-left">
                    <?= $msg->message ?>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>
