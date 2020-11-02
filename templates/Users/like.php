<div class="d-block container">
    <div class="text-center h5">いいね</div>
    <?php
        // debug($results);
        if ($results !== []) {
            $posts = $results;
            foreach ($posts as $post) {
    ?>
        <div class="card mb-3 shadow-sm">
            <div class="card-header h5 border-bottom"><?= $post->id ? $this->Users->getOneUserName($post->user_id) : 'null' ?></div>
            <div class="card-body"><?= h($post->text) ?></div>
            <?php if ($post->created) { ?>
                <div class="card-footer ">
                    投稿日時 <?= $post->created->format('yy-m-d h:m:s') ?>
                </div>
            <?php } ?>
        </div>
    <?php
            }
        } else {
    ?>
        <div class="text-center">まだいいねした表明はありません。いいねしましょう</div>
    <?php
            // echo 'まだいいねしている表明はありません。いいねしましょう';
        }
    ?>
</div>
