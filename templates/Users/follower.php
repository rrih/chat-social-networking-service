<div class="container text-center">
    フォロワー一覧
    <ul>
        <?php foreach ($followers as $follower) : ?>
            <li>
                <?= $this->Users->getOneUserName($follower->follower_id) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
