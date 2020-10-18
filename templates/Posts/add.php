<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <div class="form w-100">
        <?= $this->Form->create($post) ?>
            <div>お気持ち表明画面</div>
            ユーザー名: <?= $user->name != null ? $user->name : 'null' ?> <a href="/users/edit/<?= $user->id ?>">編集する</a>
            <?php
                echo $this->Form->control('text', ['label' => 'お気持ち内容', 'class' => 'form-control', 'maxlength' => 1000]);
            ?>
        <?= $this->Form->button(__('この内容でお気持ち表明する'), ['class' => 'btn btn-outline-primary']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
