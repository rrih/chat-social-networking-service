<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>
<div class="container p-0">
    <div class="container text-center p-0">
        <div class="mx-auto">
            <?php foreach ($posts as $post): ?>
                <!-- post card -->
                <div class="card my-3 shadow-sm">
                    <div class="card-header h5 border-bottom"><?= $post->user_name ? $post->user_name : 'null' ?></div>
                    <div class="card-body">
                        <?= h($post->text) ?>
                    </div>
                    <div class="card-text" style="font-size: 30px">
                        <!-- TODO モーダル開いて、コメントを投稿できるようにする -->
                        <a href="#" class="btn btn-outline-primary rounded-pill">
                            <i class="far fa-comment"></i>コメント
                        </a>
                        <a href="#" class="btn btn-outline-dark rounded-pill">
                        <i class="fas fa-retweet"></i>拡散
                        </a>
                        <?= $this->Form->postLink(
                            __('👍 ' . $post->like_count),
                            [
                                'action' => 'plusLikeCount',
                                $post->id
                            ],
                            [
                                'class' => 'btn btn-outline-success rounded-pill'
                            ]
                        )
                        ?>
                        <?= $this->Form->postLink(
                            __('👎 ' . $post->dislike_count),
                            [
                                'action' => 'plusDislikeCount',
                                $post->id
                            ],
                            [
                                'class' => 'btn btn-outline-danger rounded-pill'
                            ]
                        )
                        ?>
                    </div>
                    <?php if ($post->post_created) { ?>
                        <div class="card-footer text-muted">
                            投稿日時 <?= $post->post_created->format('yy-m-d h:m:s') ?>
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
</div>


