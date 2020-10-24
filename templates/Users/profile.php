<div class="profile text-center container">
    <div class="h4 text-center">
        <?php if ($isId) { ?>
            <!-- 他のユーザのプロフィール画面 -->
            <div><?= $user->name ?></div>
            <div><?= $user->created->format('yy-m-d h:m:s') ?>からお気持ち.comを利用しています</div>
            <div>
                <a href="/messages/view/<?= $user->id ?>">メッセージを送る</a>
            </div>
        <?php } else { ?>
            <!-- 自分のプロフィール画面 -->
            <div><?= $currentUser->name ?></div>
            <div><?= $currentUser->created->format('yy-m-d h:m:s') ?>からお気持ち.comを利用しています</div>
        <?php } ?>
    </div>
</div>
