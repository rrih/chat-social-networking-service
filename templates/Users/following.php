<div class="container text-center">
    フォロー一覧
    <ul class="pt-0">
        <?php foreach ($followings as $following) : ?>
            <li class="list-unstyled">
                <a href="/users/profile/<?= $following->following_id ?>"><?= $this->Users->getOneUserName($following->following_id) ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
