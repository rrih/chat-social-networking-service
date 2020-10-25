<div class="container text-center">
    フォロワー一覧
    <?php foreach ($followerList as $follower): ?>
        <!-- <div class="text-left"> -->
            <?= $this->Users->getOneUserName($follower->follower_id) ?>
        <!-- </div> -->
    <?php endforeach; ?>
</div>
