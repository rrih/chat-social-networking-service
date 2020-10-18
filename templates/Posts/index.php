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
                <div class="card-header h5 border-bottom"><?= $post->username ? $post->username : 'null' ?></div>
                <div class="card-body"><?= h($post->text) ?></div>
                <div class="card-text">
                    <?= $this->Form->postLink(__('👍 ' . $post->like_count), ['controller' => 'Posts', 'action' => 'plusLikeCount', $post->id], ['class' => 'btn btn-outline-success']) ?>
                    <?= $this->Form->postLink(__('👎 ' . $post->dislike_count), ['controller' => 'Posts', 'action' => 'plusDislikeCount', $post->id], ['class' => 'btn btn-outline-danger']) ?>
                </div>
                <?php if ($post->created) { ?>
                    <div class="card-footer text-muted">
                        投稿日時 <?= $post->created->format('yy-m-d h:m:s') ?>
                    </div>
                <?php } ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="paginator text-center">
        <ul class="pagination justify-content-center">
            <?= $this->Paginator->first('最初へ') ?>
            <?= $this->Paginator->prev('←') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('→') ?>
            <?= $this->Paginator->last('最後へ') ?>
        </ul>
    </div>
</div>
