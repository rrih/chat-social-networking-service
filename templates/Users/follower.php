<div class="container text-center">
    フォロワー一覧
    <ul class="pt-0">
        <?php foreach ($followers as $follower) : ?>
            <li class="list-unstyled">
                <a href="/users/profile/<?= $follower->follower_id ?>"><?= $this->Users->getOneUserName($follower->follower_id) ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
