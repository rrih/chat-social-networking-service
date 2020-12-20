<div class="container text-center">
    フォロワー
    <ul class="pt-0">
        <?php foreach ($followers as $follower) : ?>
            <div class="border m-2">
                <a href="/users/profile/<?= $follower->follower_id ?>"><?= $this->Users->getOneUserName($follower->follower_id) ?></a>
            </div>
        <?php endforeach; ?>
    </ul>
</div>
