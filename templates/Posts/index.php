<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>
<div class="container text-center">
    <h3><?= __('お気持ち表明一覧') ?></h3>
    <div>
        <div class="mx-auto">
            <div>
                <?php foreach ($posts as $post): ?>
                <div class="m-5">
                    <div class="border"><?= h($post->username) ?></div>
                    <div class="border"><?= h($post->text) ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('最初へ'), ['class' => 'btn btn-outline-primary']) ?>
            <?= $this->Paginator->prev('< ' . __('前へ')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('次へ') . ' >') ?>
            <?= $this->Paginator->last(__('最後へ') . ' >>') ?>
        </ul>
    </div>
</div>
