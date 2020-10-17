<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>
<div class="container text-center">
    <div class="mx-auto">
        <?php foreach ($posts as $post): ?>
            <!-- post card -->
            <div class="card my-3 shadow-sm">
                <div class="card-header h5 border-bottom"><?= h($post->username) ?></div>
                <div class="card-body"><?= h($post->text) ?></div>
                <div class="card-text">
                    <?= $this->Form->postLink(__('👍'), ['controller' => 'Posts', 'action' => 'plusLikeCount', $post->id], ['class' => 'btn btn-success']) ?><?= $post->like_count?>
                    <?= $this->Form->postLink(__('👎'), ['controller' => 'Posts', 'action' => 'plusDislikeCount', $post->id], ['class' => 'btn btn-danger']) ?><?= $post->dislike_count?>
                </div>
                <?php if ($post->created) { ?>
                    <div class="card-footer text-muted">
                        投稿日時 <?= $post->created->format('yy-m-d h:m:s') ?>
                    </div>
                <?php } ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="paginator">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <?= $this->Paginator->prev('<') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('>') ?>
            </ul>
        </nav>
    </div>
</div>
