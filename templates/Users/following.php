<div class="container text-center">
    フォロー一覧
    <?php foreach ($followingList as $following): ?>
        <!-- <div class="text-left"> -->
            <?= $this->Users->getOneUserName($following->follower_id) ?>
        <!-- </div> -->
    <?php endforeach; ?>
</div>
