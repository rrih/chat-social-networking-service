<div class="d-block container">
    いいねしたお気持ち表明一覧
    <?php
        $posts = $results;
        foreach ($posts as $post) {
    ?>
        <div class="card my-3 shadow-sm">
            <div class="card-header h5 border-bottom"><?= $post->id ? $this->Users->getOneUserName($post->user_id) : 'null' ?></div>
            <div class="card-body"><?= h($post->text) ?></div>
            <?php if ($post->created) { ?>
                <div class="card-footer text-muted">
                    投稿日時 <?= $post->created->format('yy-m-d h:m:s') ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>
