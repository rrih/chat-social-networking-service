<div class="container text-center">
    フォロー一覧
    <ul>
        <?php foreach ($followings as $following) : ?>
            <li>
                <?= $this->Users->getOneUserName($following->following_id) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
