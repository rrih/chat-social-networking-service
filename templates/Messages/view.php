<div class="text-center container">
    メッセージ
    <div>
        <?= $otherUser->name ?>
        <?php foreach ($messages as $msg): ?>
            <div class="border">
                <div>
                    送信者 <?= $this->Users->getOneUserName($msg->user_id) ?>
                </div>
                <div>
                    <?= $msg->message ?>
                </div>
                <div>
                    <?= $msg->created ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
