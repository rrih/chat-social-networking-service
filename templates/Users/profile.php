<div class="profile text-center container">
    <div class="h4 text-center">
        <?php if ($isId) { ?>
            <!-- 他のユーザのプロフィール画面 -->
            <div><?= $user->name ?></div>
            <div>
                <?php if ($this->Users->isFollowing($user->id, $currentUser->id)) { ?>
                    <?= $this->Form->postLink(__('フォローをやめる'), ['action' => 'unfollow', $user->id], ['class' => 'btn btn-danger']) ?>
                <?php } else { ?>
                    <?= $this->Form->postLink(__('フォローする'), ['action' => 'follow', $user->id], ['class' => 'btn btn-primary']) ?>
                <?php } ?>
            </div>
            <div><?= $user->created->format('yy-m-d h:m:s') ?>からお気持ち.comを利用しています</div>
            <div>
                <a href="/messages/view/<?= $user->id ?>" class="btn btn-outline-success rounded-pill py-3 px-4">メッセージ</a>
            </div>
            <div>
                <a href="/users/following/<?= $user->id ?>">フォロー</a>
            </div>
            <div>
                <a href="/users/follower/<?= $user->id ?>">フォロワー</a>
            </div>
        <?php } else { ?>
            <!-- 自分のプロフィール画面 -->
            <div><?= $currentUser->name ?></div>
            <div><?= $currentUser->created->format('yy-m-d h:m:s') ?>からお気持ち.comを利用しています</div>
            <div>
                <a href="/users/following/">フォロー</a>
            </div>
            <div>
                <a href="/users/follower">フォロワー</a>
            </div>
        <?php } ?>
    </div>
</div>
