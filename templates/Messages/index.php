<div class="text-center container">
    メッセージ
    <!-- メッセージ相手の一覧表示 -->
    <div class="py-0">
        <?php foreach($idsOfMessageRecipient as $MmessageRecipient): ?>
            <div class="border m-2">
                <div>
                    <a href="/messages/view/<?= $currentUserId === $MmessageRecipient->user_id ? $MmessageRecipient->other_user_id : $MmessageRecipient->user_id ?>">
                    <?= $this->Users->getOneUserName($currentUserId === $MmessageRecipient->user_id ? $MmessageRecipient->other_user_id : $MmessageRecipient->user_id) ?>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
