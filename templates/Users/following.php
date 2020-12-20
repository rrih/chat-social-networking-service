<div class="container text-center">
    フォロー
    <ul class="pt-0">
        <?php foreach ($followings as $following) : ?>
            <div class="border m-2">
                <a href="/users/profile/<?= $following->following_id ?>"><?= $this->Users->getOneUserName($following->following_id) ?></a>
            </div>
        <?php endforeach; ?>
    </ul>
</div>
